<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('teams_id');
            $table->unsignedInteger('accounts_id')->nullable()->comment('帳號ID');
            $table->unsignedInteger('teachers_id')->nullable()->comment('指導老師ID');
            $table->string('team_number')->nullable()->comment('專題編號');
            $table->string('team_name')->nullable()->comment('專題名稱');
            $table->string('team_field')->nullable()->comment('專題領域');
            $table->string('team_category')->nullable()->comment('專題分類');
            $table->string('education')->nullable()->comment('學制');
            $table->string('class')->nullable()->comment('班級');
            $table->string('member')->nullable()->comment('專題成員');
            $table->string('word')->nullable()->comment('系統簡介');
            $table->string('ppt')->nullable()->comment('簡報檔');
            $table->string('poster')->nullable()->comment('海報');
            $table->string('video')->nullable()->comment('簡介影片');
            $table->string('website')->nullable()->comment('網站');
            $table->timestamps();

            $table->foreign('accounts_id')->references('accounts_id')->on('accounts');
            $table->foreign('teachers_id')->references('teachers_id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
