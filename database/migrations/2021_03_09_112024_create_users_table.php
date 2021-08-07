<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 191);
			$table->string('middle_name', 191)->nullable();
			$table->string('last_name', 191);
			$table->string('email', 191)->unique();
			$table->string('username', 50)->unique();
			$table->string('password', 191);
			$table->smallInteger('role_id')->unsigned()->index();
			$table->smallInteger('branch_id')->unsigned()->default(0)->index();
			$table->integer('wrong_password_attempt_count')->unsigned()->nullable();
			$table->boolean('is_locked')->default(0);
			$table->boolean('must_change_password')->default(1);
			$table->dateTime('last_login_date')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
