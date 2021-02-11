<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class healthofficersController extends Controller
{
    //
    public function insertform(){
        return view('healthofficers_create');
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $title = $request->input('title');
        $hospitalattachment = $request->input('hospitalattachment');
        $data=array('name'=>$name,"title"=>$title,"hospitalattachment"=>$hospitalattachment);
        DB::table('healthofficers_details')->insert($data);
        echo "<h2>Record inserted successfully.</h2><br/>";
        echo '<a href = "/insert" style="font-size:20px; color:color:rgb(255, 204, 255); text-decoration:none;">Register Again</a>';
        }
        }
