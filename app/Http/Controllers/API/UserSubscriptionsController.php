<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserSubscriptionsController extends Controller
{
    public function index()
    {
        $user = User::with('subscriptions', 'subscriptions.book')->findOrFail(Auth::user()->id);

        $books = [];
        foreach ($user->subscriptions as $subscription) {
            $books[] = $subscription->book->only('isbn13', 'title');
        }

        return response()->json($books);
    }
}
