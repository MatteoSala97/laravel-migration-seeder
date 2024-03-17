<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $train = Train::all();

        return view("app", compact('train'));
    }
}
