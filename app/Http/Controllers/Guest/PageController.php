<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::where('Data_del_viaggio', '=', '25/05/2023')->get();
        return view('home', compact('trains'));
    }
}
