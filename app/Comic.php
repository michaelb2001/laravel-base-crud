<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = "comics";
    protected $fillable = ['name','description','thumb','price','series','sale_date','type'];
}
