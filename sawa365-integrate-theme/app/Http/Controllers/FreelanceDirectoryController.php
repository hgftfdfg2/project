<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class FreelanceDirectoryController extends Controller
{
    public function index(){
        return Inertia::render('Freelance/Index');
    }
    public function show(){
        return Inertia::render('Freelance/Show');
    }
}
