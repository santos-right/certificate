<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class VerifyController extends Controller
{
    public function index()
    {
        return view('verify-certificate');
    }

    public function show($certificate_no)
    {
        // return Certificate::where('certificate', 'like', '%' .$certificate_no. '%');
        return Certificate::find($certificate_no);
    }
}
