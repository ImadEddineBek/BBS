<?php

namespace App\Http\Controllers;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        $topics = Topic::all();

        // load the view and pass the topics
        return View::make('topics.index')
            ->with('topics', $topics);
    }


}
