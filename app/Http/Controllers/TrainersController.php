<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainersController extends Controller
{
    public function index()
    {
        return view('trainers');
    }
}
