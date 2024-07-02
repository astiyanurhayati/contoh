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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('judul1');
            $table->string('judul2');
            $table->string('judul3');
            $table->string('judul4');
          

            $table->text('desk1');
            $table->text('desk2');
            $table->text('desk3');
            $table->text('desk4');
            $table->text('desk5');
            $table->text('desk6');
            $table->text('desk7');

            $table->string('bg1');
            $table->string('bg2');
            $table->string('bg3');
            $table->string('bg4');
            $table->string('bg5');

            $table->string('owner');
            $table->string('owner_name');
            $table->string('owner_title');



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
        Schema::dropIfExists('abouts');
    }
};
