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
        Schema::create('pagestafs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('desk'); 
            $table->string('owner_name');
            $table->string('owner_jabatan');
            $table->text('owner_history');
            $table->string('bg');   
            $table->string('gambar_history');
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
        Schema::dropIfExists('pagestafs');
    }
};
