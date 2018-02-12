<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('user_id')->index()->comment('شناسه نویسنده');
            $table->unsignedMediumInteger('category_id')->index();
            $table->enum('status', ['publish', 'draft'])->default('publish')->comment('منتشر شده یا پیشنویس');
            $table->string('title', 100);
            $table->string('image', 100);
            $table->string('summary', 250);
            $table->text('content');
            $table->timestamp('publish_at')->comment('تاریخ انتشار');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
//            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
