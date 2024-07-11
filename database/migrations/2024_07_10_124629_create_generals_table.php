<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('logo1')->nullable();
            $table->string('logo2')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->text('address')->nullable();
            $table->string('phone1')->nullable();
            $table->string('wa')->nullable();
            $table->text('email')->nullable();
            $table->text('footer')->nullable();
            $table->text('linkfooter')->nullable();
            $table->text('description')->nullable();
            $table->string('title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('searchengine')->nullable();
            $table->string('author')->nullable();
            $table->text('website')->nullable();
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
        Schema::dropIfExists('generals');
    }
};
