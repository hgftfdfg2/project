<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NationalityController extends Controller
{
    public function index(){
        //if file exists
			if(File::exists(public_path().'/json/nationalities.json')){
				//get data from file
				$nationalities = file_get_contents(public_path().'/json/nationalities.json'); 
				return json_decode($nationalities);
			}
			else {
				return [];
			}
    }
}
