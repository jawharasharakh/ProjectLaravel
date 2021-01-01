<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrainController extends Controller
{
    public function orm (){
        $Categories =Category::all();
        dd($Categories);
    }

    public function querybuilder(){

    }
}
