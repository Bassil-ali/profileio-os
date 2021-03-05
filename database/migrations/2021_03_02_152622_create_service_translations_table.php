<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('address4');
            $table->string('address5');
            $table->string('address6');
            $table->string('text1',60000);  
            $table->string('text2',60000);  
            $table->string('text3',60000);  
            $table->string('text4',60000);  
            $table->string('text5',60000);  
            $table->string('text6',60000);  
            $table->string('locale')->index();
            $table->unique(['service_id', 'locale']);
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_translations');
    }
}
