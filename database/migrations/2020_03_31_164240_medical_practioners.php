<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicalPractioners extends Migration
{
   
    public function up()
    {
        Schema::create('MedicalPractitioners', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->string('role_id');
            $table->string('phone_No');
            $table->integer('updated_by')->nullable();
            $table->integer('created_by');
            $table->softdeletes('deleted_at');
            $table->timestamps();
        
        });
    }

   
    public function down()
    {
        Schema::dropIfExist('MedicalPractioners');
    }
}
