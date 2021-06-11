<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * Show the pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function starter()
    {
        return view('admin/starter');
    }
    public function dashboard()
    {
        return view('admin/dashboard/index');
    }
    public function contacts()
    {
        return view('admin/contacts/index');
    }
    public function trialUsers()
    {
        return view('admin/trial-users/index');
    }
}
