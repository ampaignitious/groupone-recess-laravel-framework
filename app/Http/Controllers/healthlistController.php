<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class healthlistController extends Controller
{
    public function index(){
    	$users = DB::select('select * from healthofficers_details');
    return view('healthlist',['users'=>$users]);
}
}
