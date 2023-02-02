<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    //
    /**
     * define userRepo
     *
     * @var $userRepo
     */
    protected $userRepo;
    function __construct(UserRepository $userRepo)
    {
        $this->middleware('auth');
        $this->userRepo = $userRepo;
    }

    public static function Routes()
    {
        Route::get('users/', [UserController::class, 'list'])->name('users');
        Route::get('users/profile/', [UserController::class, 'index'])->name('profile');

    }

    public function index()
    {


        return view('users.profile');
    }
    public function list()
    {
        $users=$this->userRepo->getAll();
        return view('users.list', compact('users'));
    }
}
