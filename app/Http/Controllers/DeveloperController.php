<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_developer != 1) {
            return redirect('/');
        }
        return view('developers.index');
    }

    public function join(Request $request)
    {
        $user = Auth::user();
        $user->is_developer = 1;

        $user->save();

        return redirect('/');
    }

    public function revoke(Request $request)
    {
        return view('developers.revoke');
    }
}
