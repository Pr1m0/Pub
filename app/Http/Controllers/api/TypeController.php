<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller{

    public function getTypes(){

        $types =Type::all();
        return $types;
    }
}
