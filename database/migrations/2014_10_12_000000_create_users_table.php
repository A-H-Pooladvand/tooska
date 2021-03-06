<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->mediumIncrements('id');
            $table->string('name', 100);
            $table->string('family', 100)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('mobile', 30)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('verifyToken', 50)->nullable();
            $table->string('password', 150);
            $table->boolean('is_active')->default(false)->comment('فعال یا غیرفعال بودن اکانت');
            $table->softDeletes();
            $table->rememberToken();
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
