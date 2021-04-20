<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',10)->length(10);
            $table->string('name')->length(255);
            $table->string('email')->length(255)->index()->unique();
            $table->string('password')->length(50);
            $table->rememberToken('remember_token')->length(100)->nullable();
            $table->string('verify_email')->length(100)->nullable();
            $table->tinyInteger('is_active')->length(1);
            $table->tinyInteger('is_delete')->length(1);
            $table->string('group_role')->length(50);
            $table->timestamp('last_login_at')->nullable();
            $table->ipAddress('last_login_ip',40)->length(40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
