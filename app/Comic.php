<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comic extends Model
{
    protected $fillable= ['title', 'description', 'series','sale_date', 'type'];
}
