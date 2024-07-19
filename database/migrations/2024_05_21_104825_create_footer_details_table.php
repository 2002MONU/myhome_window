<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_details', function (Blueprint $table) {
            $table->id();
            $table->string('favicon');
            $table->string('logo');
            $table->string('footerabout');
            $table->string('address');
            $table->string('email');
            $table->integer('contact');
            $table->string('title');
            $table->string('facebook');
            $table->string('vimeo');
            $table->string('twitter');
            $table->string('instagram');
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
        Schema::dropIfExists('footer_details');
    }
}
