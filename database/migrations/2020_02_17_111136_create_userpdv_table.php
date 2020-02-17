<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserpdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('userpdv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid', 10)->unique()();
            $table->string('usernm', 20);
            $table->string('userlv', 1);
            $table->string('userap', 6);
            $table->string('userpw', 100);
            $table->date('tglupd');
            $table->string('usrupd', 16);
            $table->string('kode', 25);
            $table->date('passexp');
            $table->string('host', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userpdv');
    }
}
