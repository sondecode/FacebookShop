<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RoomController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }

    public static function Routes(){
          Route::get('/',[RoomController::class,'index'])->name('home');
          Route::get('room/list',[RoomController::class,'list'])->name('room.list');
    }
    public function index(){
             return view('room.map');
    }
    public function list(){
        return view('room.list');
    }
}
