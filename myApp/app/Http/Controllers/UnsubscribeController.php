<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnsubscribeController extends Controller
{
     public function unsubscribe($user)
    {
        // Example: update user subscription
        // User::find($user)->update(['subscribed' => false]);

        return "User {$user} unsubscribed successfully.";
    }
}
