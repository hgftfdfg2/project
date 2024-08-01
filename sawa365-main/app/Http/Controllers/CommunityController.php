<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('id','=',$request->user()->id)->with('state')->first();
        return Inertia::render('Community/Index',[
            'user' =>$user
        ]);
    }
    public function indexMyGroup()
    {
        return Inertia::render('Community/Group/Index');
    }
}
