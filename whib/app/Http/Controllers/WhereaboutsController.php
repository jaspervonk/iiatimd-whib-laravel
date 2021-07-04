<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WhereaboutsController extends Controller
{
    public function index($user){
        return ['whereabouts' => \App\Models\Whereabout::all()->where('user', '=', $user)];
    }

    public function show($user, $uuid){
        return ['whereabout' => \App\Models\Whereabout::all()->where('user', '=', $user)->where('uuid', '=', $uuid)->first()];
    }
}
