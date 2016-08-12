<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = 'customer';
    protected $primaryKey = 'id';

    public function GetProduct()
    {
        return $this->belongsToMany('App\Product','product_customer');
    }

}
