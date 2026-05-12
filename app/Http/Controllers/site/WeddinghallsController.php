<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeddinghallsController extends Controller
{
    //
    public function weddinghalls(){
        return view('site.weddinghals.index');
    }
}
