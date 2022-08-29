<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $certificates = Certificate::orderBy('created_at', 'DESC')->get();
        
        // $certificates = Certificate::latest()->with(['certificate'])->paginate(10);

        return view('home', [
            'certificates' => $certificates,
        ]);
    }
}
