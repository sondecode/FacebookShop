<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CustomerController extends Controller
{
    //

    function __construct()
    {
        $this->middleware('auth');
    }
   public static  function  Routes(){
        Route::get('customers/',[CustomerController::class, 'index'])->name('customers');
    }

    public function index(){
        return view('customers.list');
    }
}
