@extends('layouts.app')



@section('content')

<div class="container bg-event rounded border mb-4">
  <div class="btn-group">
    <a href="{{ route('events.showEventCreation') }}" class="btn btn-sm btn-event">Créer un nouvel événement</a>
  </div>
</div>

<div class="container bg-white rounded border p-3">
  <div class="row">
    <div class="col-sm-2 text-center text-sm-left">
      <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=PID{{ $Participation->id }}_SID{{ $Participation->session_id }}_UID{{ $Participation->user_id }}" class="img-fluid w-100">
    </div>
    <div class="col-sm-10 text-center text-sm-left">
      <h2>{{ $Participation->session->name }}</h2>
      <hr>
      @if($Participation->flashed_at)
      Ce QR Code a été scanné le {{ $Participation->flashed_at }}
      @endif
    </div>
  </div>


</div>

@endsection



@section('js')

@endsection



@section('css')
@endsection