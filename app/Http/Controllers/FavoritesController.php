<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class FavoritesController extends Controller
{

	public function __construct()
	{
		//check for user signin
		$this->middleware('auth');

		

		
	}
    public function store(Question $question)
    {
    	$question->favorites()->attach(auth()->id());

    	return back();
    }


    public function destory(Question $question)
    {
    	$question->favorites()->detach(auth()->id());

    	return back();
    }



}
