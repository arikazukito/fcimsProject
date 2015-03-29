<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Pagecontroller extends Controller {

	public function index(){
        return view('pages.index');

    }
    public function about(){
        return view('pages.about');

    }
    public function contact(){
        return view('pages.contact');

    }
    public function playerDetail(){
        return view('pages.playerDetail');

    }
    public function clubDetail(){
        return view('pages.clubDetail');
    }
    public function coachDetail(){
        return view('pages.coachDetail');
    }

}
