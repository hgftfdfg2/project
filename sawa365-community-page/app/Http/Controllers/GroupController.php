<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GroupController extends Controller
{
    public function index(Request $request)
    {
        $all_groups = Group::paginate(7);
        $user_groups = User::where('id', $request->user()->id)->with('groups')->get();

        // dd($user_groups);

        return Inertia::render('Group/Index', [
            'all_groups' => $all_groups,
            'user_groups' => $user_groups,
        ]);
    }
    public function index_my_group(Request $request,string $name)
    {
        $group = Group::where('name','=',$name)->first();

        // dd($name);

        return Inertia::render('Group/MyGroup/Index', [
            'group_info' => $group
        ]);
    }
}
