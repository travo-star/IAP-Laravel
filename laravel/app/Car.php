<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public function up(){
        Schema::create('cars',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('make');
            $table->string('model');
            $table->date('produced_on');
            $table->timestamps();
        });
}

