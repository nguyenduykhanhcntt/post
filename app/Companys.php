<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companys extends Model
{
    protected $fillable = [
        'id', 'name_company','address','phone'
    ];

    protected $table = 'company';

    public $timestamps = false;

}
