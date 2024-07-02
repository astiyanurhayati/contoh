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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('icon_slidder'); 
            $table->string('icon_special');
            $table->string('icon_banner'); 

            $table->string('bg_special');
            $table->string('bg_banner'); 
            $table->string('bg_feature'); 
            $table->string('bg_recipe');
            $table->string('bg_footer');
            
            
            $table->string('judul_special');
            $table->string('judul_banner'); 
            $table->string('judul_portofolio');
            $table->string('judul_testimonial'); 
            $table->string('judul_price'); 
            $table->string('judul_footer1');
            $table->string('judul_footer2');

            
            $table->string('btn_feature'); 
            $table->string('btn_banner'); 
            $table->string('btn_price'); 
            
            
            
            $table->text('desk_banner');
            $table->text('desk_price');
            
            

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
        Schema::dropIfExists('templates');
    }
};
