<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{

    public function showHome()
    {
        $users = User::all();
        $events = Evenement::all();

        return view('admin.home', compact('users', 'events'));
    }

    public function deleteEvent(Evenement $Evenement)
    {
        $Evenement->sessions()->delete();
        $Evenement->delete();
        return redirect()->route('admin.showHome');
    }

    public function deleteSession(Session $Session)
    {
        $Session->delete();
        return redirect()->route('admin.showHome');
    }
}
