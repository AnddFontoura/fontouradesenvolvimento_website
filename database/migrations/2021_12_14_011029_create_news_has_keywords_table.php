<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsHasKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_has_keywords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_id')->nullable(false);
            $table->unsignedBigInteger('news_keyword_id')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('news_keyword_id')->references('id')->on('news_keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_has_keywords');
    }
}
