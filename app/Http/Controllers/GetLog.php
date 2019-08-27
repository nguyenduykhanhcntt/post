<?php
namespace App\Http\Controllers;
use App\Services\Sever;
class GetLog{
    public function index(Sever $s){
        return $s->oke();
    }
}