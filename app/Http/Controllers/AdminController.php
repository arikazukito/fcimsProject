<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function dashboard(){
        return view('admin/dashboard');
    }
    public function player(){
        return view('player/index');
    }
    public function club(){
        return view('club/index');
    }
    public function coach(){
        return view('coach/index');
    }


}
