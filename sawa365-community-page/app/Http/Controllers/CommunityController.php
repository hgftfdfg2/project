<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Group;
use App\Models\StateImgs;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('id','=',$request->user()->id)->with('state')->first();
        $state_imgs = StateImgs::where('state_id', '=', $user->state_id)->get();
        $state_events = Event::where('state_id', '=', $user->state_id)->get();
        $state_groups = Group::where('state_id', '=', $user->state_id)->get();

        return Inertia::render('Community/Index',[
            'user' =>$user,
            'state_imgs' =>$state_imgs,
            'state_events'=> $state_events,
            'state_groups' => $state_groups
        ]);
    }
    public function indexMyGroup()
    {
        return Inertia::render('Community/Group/Index');
    }
}
