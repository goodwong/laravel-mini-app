<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiniappUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miniapp_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('openId');
            $table->string('unionId')->nullable();
            $table->string('nickName')->nullable(); //	String	用户昵称
            $table->string('avatarUrl')->nullable(); //	String	用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。
            $table->string('gender')->nullable();   //	String	用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
            $table->string('city')->nullable();     //	String	用户所在城市
            $table->string('province')->nullable(); //	String	用户所在省份
            $table->string('country')->nullable();  //	String	用户所在国家
            $table->string('language')->nullable(); //	String	用户的语言，简体中文为zh_CN
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
        Schema::dropIfExists('miniapp_users');
    }
}
