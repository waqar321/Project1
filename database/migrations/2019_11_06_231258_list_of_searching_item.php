<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListOfSearchingItem extends Migration
{
    
   public function up(){
         // name address area city country contact email category type bugdet floor sq_ft banglow_sq_yd nature_of_buying Time_to_call choosen_location
    
        Schema::create('ListOfSearchingItem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
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
