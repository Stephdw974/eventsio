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
        return json_encode($Evenement->sessions->all());
    }


    function getEventSession(Evenement $Evenement, Session $Session)
    {
        return json_encode($Session);
    }


    function getParticipations(Evenement $Evenement, Session $Session)
    {
        return json_encode($Session->participations->all());
    }


    function getParticipationUser(Evenement $Evenement, Session $Session, Participation $Participation)
    {
        return json_encode($Participation->user);
    }


    function scanQrCode($data)
    {

        // SID4_UID1
        $sessionID = explode("<FNC1>", $data)[0];
        $userID = explode("<FNC1>", $data)[1];

        $participation = Participation::where([['session_id', $sessionID], ['user_id', $userID]])->first();
        if ($participation) {
            $participation->flashed_at = time();
            $participation->save();
            return json_encode('Participation validée');
        } else {
            return json_encode('Participation invalide');
        }
    }
}
