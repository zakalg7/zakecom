<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;

class SecondController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}
    
    public function showSecondFunc0(){
    	return 'showSecondFunc 0';
    } 
    public function showSecondFunc1(){
    	return 'showSecondFunc 1';
    } 
    public function showSecondFunc2(){
    	return 'showSecondFunc 2';
    } 
    public function showSecondFunc3(){
    	return 'showSecondFunc 3';
    } 
}
