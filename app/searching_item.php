<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class searching_item extends Model{

    protected $table = "ListOfSearchingItem";
    protected $primaryKey = "id";
    protected $fillable = ['name'];
    public $timestamps = false;
}
