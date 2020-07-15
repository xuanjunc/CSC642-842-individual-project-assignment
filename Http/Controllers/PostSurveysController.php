<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostSurveys;


class PostSurveysController extends Controller
{
    public function index()
    {
    	return view('postsurveys');
    }

    public function store(Request $request)
    {
           
             $postsurveys = new Postsurveys();
             $postsurveys->name=request('name');
             $postsurveys->address=request('address');
             $postsurveys->dob=request('dob');
             $postsurveys->education=request('education');
             $postsurveys->height=request('height');
             $postsurveys->phone=request('phone');
             $postsurveys->email=request('email');
             $postsurveys->save();
             //
            
         	 return redirect()->route('post-surveys');

    }
}
