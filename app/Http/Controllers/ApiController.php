<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\Participation;
use App\Session;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getEvents()
    {
        return json_encode(Evenement::all());
    }


    function getEvent(Evenement $Evenement)
    {
        return json_encode($Evenement);
    }


    function getEventSessions(Evenement $Evenement)
    {
        return json_encode($Evenement->sessions->get());
    }


    function getEventSession(Evenement $Evenement, Session $Session)
    {
        return json_encode($Session);
    }


    function scanQrCode($data)
    {

        // PID1_SID4_UID1
        $sessionID = substr(explode('_', $data)[1], 3);
        $userID = substr(explode('_', $data)[2], 3);

        $participation = Participation::where([['session_id', $sessionID], ['user_id', $userID]])->get();
        dd($participation);
        if (count($participation) == 1) {
            $participation->flashed_at = time();
            $participation->save();

            return json_encode('OK');
        }
        return json_encode('KO');
    }
}
