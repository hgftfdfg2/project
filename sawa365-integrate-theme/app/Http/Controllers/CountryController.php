<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    public function index(){
        //if file exists
			// if(File::exists(public_path().'/json/countries.json')){
			// 	//get data from file
			// 	$countries = file_get_contents(public_path().'/json/countries.json');
			// 	return json_decode($countries);
			// }
			// else {
			// 	return [];
			// }

		$countries = Country::all();
		return $countries;
    }
    public function index_states(){
        //if file exists
			// if(File::exists(public_path().'/json/states.json')){
			// 	//get data from file
			// 	$states = file_get_contents(public_path().'/json/states.json');
			// 	return json_decode($states);
			// }
			// else {
			// 	return [];
			// }

		$states = State::with('country')->get();
		return $states;
    }
}
