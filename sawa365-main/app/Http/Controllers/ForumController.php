<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class ForumController extends Controller
{
    public function index(){
        return Inertia::render('Forum/Index');
    }

    public function show(){
        return Inertia::render('Forum/Show');
    }
}
