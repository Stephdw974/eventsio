<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\Participation;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function showHome()
    {
        return view('home.home');
    }


    public function showMe()
    {
        return view('home.me');
    }


    public function showQr(Participation $Participation)
    {

        $session = $Participation->session;
        $evenement = Evenement::where('id', $Participation->session->evenement_id);        
        return view('home.qr', compact('Participation','session', 'evenement'));
    }
}
