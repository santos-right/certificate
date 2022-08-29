<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('tables', [
            'certificates' => $certificates,
        ]);
    }
}
