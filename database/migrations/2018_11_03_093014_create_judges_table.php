<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {
            $table->increments('judges_id')->comment('評委ID');
            $table->unsignedInteger('accounts_id')->nullable()->comment('帳號ID');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('email')->nullable()->comment('電子信箱');
            $table->string('phone')->nullable()->comment('連絡電話');
            $table->timestamps();

            $table->foreign('accounts_id')->references('accounts_id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judges');
    }
}
