<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retests', function (Blueprint $table) {
            $table->increments('retests_id')->comment('複試ID');
            $table->unsignedInteger('teams_id')->nullable()->comment('專題組別ID');
            $table->unsignedInteger('teachers_id')->nullable()->comment('評分老師ID');
            $table->double('score_creative',5,2)->nullable()->comment('創意分數');
            $table->double('score_present',5,2)->nullable()->comment('口頭報告分數');
            $table->double('score_clothing',5,2)->nullable()->comment('服裝分數');
            $table->text('comment')->nullable()->comment('評語');
            $table->text('suggest')->nullable()->comment('建議');
            $table->timestamps();

            $table->foreign('teams_id')->references('teams_id')->on('teams');
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
        Schema::dropIfExists('retests');
    }
}
