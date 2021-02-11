<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class officersController extends Controller
{
    public function index(){
    	$officers = officer::all();
    	return view('officers.index',compact('officers'));
    }
    public function create(){
    	return view('officers.create');
    }
    public function storeofficer(){
    	$officer = new officer();
    	$officer->name= request('name');
    	$officer->hosiptalattachment=request('hosiptalattachment');

    	$officer->save();

    	return redirect('/officers');
    }
}
