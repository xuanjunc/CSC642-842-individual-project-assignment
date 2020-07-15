<?php

namespace App\Http\Controllers;
use App\PostSurveys;
use App\User;
use Auth;
use DB;
use Carbon;

use Illuminate\Http\Request;

class SubmitSurveysController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $post_surveys = DB::table('post_surveys')->orderBy('id', 'desc')->paginate(3);
       
        return View('submitsurveys')->with('post_surveys', $post_surveys);
   
    }

}