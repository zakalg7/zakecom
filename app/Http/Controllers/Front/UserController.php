<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as Controller;

class UserController extends Controller
{
    public function showUsername(){
    	return 'Zakaria Abdullah Omar Alik';
    }

    public function getIndex(){

    	$data =[];
    	$data['id'] = 10;
    	$data['name'] = 'Zakaria';
    	$data['age'] = 25;
    	return view('welcome',$data);
    }
}
