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
            $table->string('logo3')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('ig')->nullable();
            $table->string('yt')->nullable();
            $table->text('map')->nullable();
            $table->text('address')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('wa')->nullable();
            $table->text('email1')->nullable();
            $table->text('email2')->nullable();
            $table->text('footer')->nullable();
            $table->text('linkfooter')->nullable();
            $table->text('breadcrumb')->nullable();


            $table->string('description')->nullable();
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('searchengine')->nullable();
            $table->string('author')->nullable();
            $table->string('website')->nullable();

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
