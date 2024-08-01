<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(Request $request){
        $all_groups = Group::all();
        $user = User::where('id', $request->user()->id)->with('groups')->get();

        return response()->json([
            'all_groups' => $all_groups,
            'user' => $user,
        ]);
    }
}
