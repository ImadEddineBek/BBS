<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //3

    public function contact()
    {
        return view('contact-us');
    }


}
