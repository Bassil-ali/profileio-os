<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('footer_id');
            $table->string('company_name');
            $table->string('text',60000);  
            $table->string('address');  
            $table->string('locale')->index();
            $table->unique(['footer_id', 'locale']);
            $table->foreign('footer_id')->references('id')->on('footers')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fouter_translations');
    }
}
