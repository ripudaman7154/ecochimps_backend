<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'first_name' => 'super',
            'last_name' => 'admin',
            'role_id' => 1,
            'username'=>'admin',
            'email'=>'super@mail.com',
            'password' => bcrypt('password'),
            'must_change_password' => false,
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
