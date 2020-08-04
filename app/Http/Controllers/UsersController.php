<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UsersController extends Controller
{
    public function notifications()
    {
        
        //mark all as read
        auth()->user()->unreadNotifications->markAsRead();

        //dd(auth()->user()->notifications()->first()->data['discussion']['slug']);
        //display all notification

        return view('users.notifications',[

            'notifications' => auth()->user()->notifications()->paginate(5)


        ]);
    }
}
