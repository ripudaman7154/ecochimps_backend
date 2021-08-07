<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\AuditTrail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function showLoginForm(Request $request)
    {
        if ($request->isMethod('post')) {
            return $this->postLogin($request);
        }
        return view('admin.login.index');
    }


    public function postLogin(Request $request)
    {
        //validate request
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required'
        ]);


        // get our login input
        $login = $request->input('login');

        // check login field
        $login_type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // merge our login field into the request with either email or username as key
        $request->merge([$login_type => $login]);

        $credentials = $request->only($login_type, 'password');

        //check the user trying to login
        if (isset($credentials['username']) && !empty($credentials['username']))
            $user = User::where([
                ['username', '=', $credentials['username']]
            ])->first();
        else
            $user = User::where([
                ['email', '=', $credentials['email']]
            ])->first();

        if (!empty($user) && $user->is_locked) {
            //process locked user
            $request->session()->put('locked_user_id', $user->id);
            return view('locked');
            //return redirect()->route('settings.get_locked_user');
        }

        if (Auth::attempt($credentials))
        {
            $user = Auth::user();
            $user->last_login_date = \Carbon\Carbon::now();
            if (
                empty($user->wrong_password_attempt_count) ||
                $user->wrong_password_attempt_count > 0
            ) {
                $user->wrong_password_attempt_count = 0;
            }
            $user->save();

            //update audit_trail
            AuditTrail::query()->create([
                'user_id' => $user->id,
                'username' => $user->username,
                'date' => Carbon::now()->toDateTimeString(),
                'activity' => $user->username.' logged in '
            ]);



            if ($user->must_change_password) {
                return redirect()->intended('/');
            } else {

                $href = '/';
                $role =  "";

                if (preg_match('/SP_/', $role)) $href = '/sp';

                session()->put('xbr_id', $user->branch_id);
                return redirect()->intended($href);
            }
        } else {
            if (!empty($user)) {
                if (empty($user->wrong_password_attempt_count)) {
                    $user->wrong_password_attempt_count = 0;
                }
                $user->wrong_password_attempt_count++;
                //lock user password after 21 trial
                if ($user->wrong_password_attempt_count >= 30) {
                    $user->is_locked = true;
                }
                $user->save();
            }
            return Redirect::back()
                ->withInput($request->only('login', 'remember'))
                ->withErrors(['login' => Lang::get('auth.failed')]);
        }



    }


    public function logout()
    {
        $user = auth()->user();

        if ($user) {
            $user->log('User logged out');
            auth()->logout();
            session()->flush();
            session()->invalidate();
        }

        return redirect()->route('login');
    }


}



