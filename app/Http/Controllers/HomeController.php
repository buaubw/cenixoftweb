<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\website;
use App\Customer;
use App\Logo;
use App\Mobile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websites = Website::all();
        $mobiles = Mobile::all();
        $logos = Logo::all();
       return view('welcome')->with('logos', $logos)->with('websites', $websites)->with('mobiles', $mobiles);
    }

    public function website($id)
    {
        $websites = Website::find($id);
       return view('website')->with('website', $websites);
    }
    public function mobile($id)
    {
        $mobile = Mobile::find($id);
       return view('mobile')->with('mobile', $mobile);
    }
    public function logo($id)
    {
        $logos = Logo::find($id);
       return view('logo')->with('logo', $logos);
    }
    public function addmoreinfo()
    {
      $customer = Customer::find(3);
        return view('addmoreinfo')->with('customer',$customer);
    }
    public function addinfo($id)
    {

        return view('addmoreinfo');
    }








}
