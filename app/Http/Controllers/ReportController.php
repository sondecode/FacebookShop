<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ReportController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }
   public static  function  Routes(){
        Route::get('reports/',[CustomerController::class, 'index'])->name('reports');
    }

    public function index(){
        return view('customers.list');
    }
}
