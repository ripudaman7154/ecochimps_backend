<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'role_id', 'branch_id', 'email', 'username', 'password', 'must_change_password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function user() {
        return $this->belongsTo('App\CourseTrainer');
    }

    public function getFullNameAttribute()
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }

    public function getNameAttribute()
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }

    public function log($message) {
        $message = ucwords($message);
        AuditTrail::create([
            'user_id'   => $this->id,
            'branch_id' => $this->branch_id,
            'username'  => $this->username,
            'date'      => Carbon::now()->toDateTimeString(),
            'activity'  => $this->first_name.' '.$this->last_name. ": {$message}"
        ]);
    }

    public function api_token() {
        return $this->hasOne('App\ApiToken');
    }

    public function branch() {
        return $this->belongsTo('App\Branch');
    }

    public function staff() {
        return $this->hasOne('App\Staff');
    }

    public function is_admin() {
        return $this->role->role == 'RL_ADM' ? true : false;
    }

    public function is_staff() {
        return $this->role->role == 'RL_STF' ? true : false;
    }

    // detect if user can approve OR reject timesheet extensions.
    public function can_extend() {
        if ($this->is_staff())
        {
            $positions = $this->staff->positions;
            if ($positions != null)
            {
                foreach ($positions as $pos)
                {
                    $name   = strtolower($pos->level->name);
                    $f_word = strtok($name, ' ');
                    if ($f_word != 'non' || preg_match('/senior|middle|opera/', $name))
                    {
                        return true;
                        break;
                    }
                    else
                    {
                        if (preg_match('/lead|head|super|manager/', $name))
                        {
                            return true;
                            break;
                        }
                    }
                }
            }
        }
        return false;
    }

    // can add new staff
    public function can_add_staff() {
        if ($this->is_staff())
        {
            return false;
        }
        return false;
    }

    public function token()
    {
        $token = Util::get_user_token($this);
        return $token;
    }

    public function helper() {
        return new MyTool($this);
    }

    public function myevents(){
        return $this->belongsToMany('App\HrmEvent','hrm_event_owners','user_id','hrm_event_id','id','id');
    }

    public function myemployeetask(){
        return $this->belongsTo('App\HrmEmployeeTask','id','owner');
    }

    public function full_name() {
        $name = $this->first_name .' '.$this->middle_name .' '. $this->last_name;
        return trim(str_replace('  ', ' ', $name));
    }
}
