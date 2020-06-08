<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
  protected $fillable = [
    'product_id', 'user_id' , 'address', 'status', 'phone' ,'description'
  ];

}
