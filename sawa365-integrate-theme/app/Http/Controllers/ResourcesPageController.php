<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ResourcesPageController extends Controller
{
    public function index(){
        return Inertia::render('Resource/Index');
    }
    public function show(){
        return Inertia::render('Resource/Show');
    }
}
