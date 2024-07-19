<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoorCategoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('door_category_details', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
           $table->string('image5');
            $table->string('titletype');
            $table->string('slug1');
            $table->string('doorbrand');
            $table->string('description');
            $table->string('doormodel');
            $table->integer('price');
            $table->integer('saleprice');
            $table->string('paragraph');
            $table->string('moredetails');
            $table->string('color');
            $table->string('woodtype');
            $table->string('prodimension');
            $table->integer('status');
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
        Schema::dropIfExists('door_category_details');
    }
}
