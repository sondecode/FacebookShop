<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ServiceController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    public static function Routes(){
          Route::get('service/',[ServiceController::class,'index'])->name('service');

    }
    public function index(){
             return view('service.list');
    }

}
