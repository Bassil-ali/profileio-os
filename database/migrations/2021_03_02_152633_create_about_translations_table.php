<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('about_id');
            $table->string('text',60000);
            $table->string('section_1',60000);
            $table->string('section_2',60000);
            $table->string('section_3',60000);
            $table->string('section_4',60000);
            $table->string('section_5',60000);
            $table->string('section_6',60000); 
            $table->string('locale')->index();
            $table->unique(['about_id', 'locale']);
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_translations');
    }
}
