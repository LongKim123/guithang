<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menus';
    public function menuChildrent(){
    	return $this->hasMany(Menu::class ,'parent_id');
    }
}
