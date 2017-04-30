<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class 1XlcpXController extends Controller
{
    public function __construct() 
    {
        $this->middleware('CMSAuthenticate');
    }

    public function index()
    {
        return view('cms.2XpX.index');
    }
}
