<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurworkTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourwork_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ourwork_id');
            $table->string('address'); 
            $table->string('text',60000);    
            $table->string('locale')->index();
            $table->unique(['ourwork_id', 'locale']);
            $table->foreign('ourwork_id')->references('id')->on('ourworks')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ourwork_translations');
    }
}
