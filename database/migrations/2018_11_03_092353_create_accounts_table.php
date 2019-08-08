<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('accounts_id')->comment('帳號ID');
            $table->string('account')->nullable()->comment('帳號');
            $table->string('password',255)->nullable()->comment('密碼');
            $table->string('identity')->nullable()->comment('身分(0:管理員,1:學生,2:老師,3:評委)');
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
        Schema::dropIfExists('accounts');
    }
}
