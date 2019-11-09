<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up(){
         // name address area city country contact email category type bugdet floor sq_ft banglow_sq_yd nature_of_buying Time_to_call choosen_location
    
        Schema::create('form_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->string('area');
            $table->string('city');
            $table->string('country');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('category');
            $table->string('type');
            $table->string('bugdet');
            $table->string('floor');
            $table->string('sq_ft');
            $table->string('banglow_sq_yd');
            $table->string('nature_of_buying');
            $table->string('Time_to_call');
            $table->string('choosen_location');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        //
    }
}
