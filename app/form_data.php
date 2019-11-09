<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_data extends Model
{
      // name address area city country contact email category type bugdet floor sq_ft banglow_sq_yd nature_of_buying Time_to_call choosen_location
    protected $table = "form_data";
    protected $primaryKey = "id";
    protected $fillable = [
		    						'name',
		    						'address',
		    						'area',
		    						'city',
		    						'country',
		    						'contact',
		    						'email',
		    						'category',
		    						'type',
		    						'bugdet',
		    						'floor',
		    						'sq_ft',
		    						'banglow_sq_yd',
		    						'nature_of_buying',
		    						'Time_to_call',
		    						'choosen_location'
    					];
    public $timestamps = false;
}
