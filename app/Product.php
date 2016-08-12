<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'product';
    protected $primaryKey = 'id';

    public function GetCustomer()
  	{
    	return $this->hasMany('App\Customer','id');
    }

}
