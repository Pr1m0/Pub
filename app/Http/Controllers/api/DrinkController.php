<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drink;


class DrinkController extends Controller {

    public function getDrinks(){

        $drinks =Drink::all();
        return $drinks;
    }

    public function getDrink(Request $request){
        $drink=Drink::where ("drink", $request["drink"])->first();
        return $drink;
    }

    public function newDrink(Request $request){

        $drink = new Drink();
        $drink->drink = $request["drink"];
        $drink->amount = $request["amount"];
        $drink->type_id = $request["type_id"];
        $drink->package_id=$request["package_id"];

        $drink->save();

        return $drink;
    }

    public function updateDrink(Request $request){

        $drink = $this->getDrink($request);

        $drink->drink = $request["drink"];
        $drink->amount = $request["amount"];
        $drink->type_id = $request["type_id"];
        $drink->package_id=$request["package_id"];

        $drink->update();
        return $drink;
    }

    public function destroyDrink(Request $request){

        $drink = $this->getDrink( $request);
        $drink ->delete();

        return $drink;
    }

    
    
}
