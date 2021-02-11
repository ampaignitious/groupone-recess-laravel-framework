<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class donationlistController extends Controller {
	//
   public function index() {
      $users = DB::select('select * from donation');
      return view('donation_view',['users'=>$users]);
   }
}
