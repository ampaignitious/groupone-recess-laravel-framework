<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class donationController extends Controller
{
    //
    public function indexs(){
        return view('donation_create');
        }
        public function index(Request $request){
        $name = $request->input('name');
        $amount = $request->input('amount');
        $month=$request->input('month');
        $data=array('name'=>$name,"amount"=>$amount,"month"=>$month);
        DB::table('donation')->insert($data);
        echo "<h3>Donation made recorded successfully.</h3><br/>";
        echo '<a href = "donation_create" style="font-size:20px; text-decoration:none;">Back</a>';
        }
        }