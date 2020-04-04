<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('phone');
            $table->string('mail');
            $table->string('facebooklink')->nullable();;
            $table->string('twitterlink')->nullable();;
            $table->string('linkedenlink')->nullable();;
            $table->string('googlepluslink')->nullable();;
            $table->integer('clients');
            $table->integer('activeproject');
            $table->integer('completedproject');
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
        Schema::dropIfExists('homes');
    }
}
