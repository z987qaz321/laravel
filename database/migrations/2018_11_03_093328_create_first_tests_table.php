<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_tests', function (Blueprint $table) {
            $table->increments('first_tests_id')->comment('初試ID');
            $table->unsignedInteger('teams_id')->nullable()->comment('專題組別ID');
            $table->unsignedInteger('judges_id')->nullable()->comment('評委ID');
            $table->double('score_system',5,2)->nullable()->comment('系統分數');
            $table->double('score_ppt',5,2)->nullable()->comment('簡報檔分數');
            $table->text('comment')->nullable()->comment('評語');
            $table->text('suggest')->nullable()->comment('建議');
            $table->timestamps();

            $table->foreign('teams_id')->references('teams_id')->on('teams');
            $table->foreign('judges_id')->references('judges_id')->on('judges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_tests');
    }
}
