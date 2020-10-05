<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('intro');
            $table->string('title');
            $table->string('featured_image');
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->string('category');
            $table->string('publish_at');
            $table->string('author');
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
        Schema::dropIfExists('cultures');
    }
}
