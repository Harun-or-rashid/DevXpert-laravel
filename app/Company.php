<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
   protected $appends =[];

    public function Customers()
    {
        return $this->hasOne(Customer::class);
   }
}
