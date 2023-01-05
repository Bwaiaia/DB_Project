<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraining_TypesTable extends Migration
{

    public function up()
    {
        Schema::create('training_types', function (Blueprint $table){
             $table->id();
             $table->string('training_name');
             $table->string('training_description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('training_types');
    }
}



