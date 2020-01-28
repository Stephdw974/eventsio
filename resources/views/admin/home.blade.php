@extends('layouts.app')



@section('content')

<div class="container bg-white border rounded-0 p-4">
  <h2 onClick="$(this).next().slideToggle()"><span class="font-weight-light">[{{ $users->count() }}]</span> UTILISATEURS</h2>
  <div>
    @foreach($users as $user)
    <a href="#" class="btn btn-event btn-sm mr-3"><i class="fas fa-trash mr-3"></i> Supprimer</a>
    {{ $user->email }}
    @endforeach
  </div>
  <hr>

  <h2 onClick="$(this).next().slideToggle()"><span class="font-weight-light">[{{ $events->count() }}]</span> EVENEMENTS</h2>
  <div style="display: none">
    @foreach($events as $event)
    <a href="#" class="btn btn-event btn-sm mr-3"><i class="fas fa-trash mr-3"></i> Supprimer</a>
    {{ $event->name }}
    @endforeach
  </div>
  <hr>

  <h2 onClick="$(this).next().slideToggle()"><span class="font-weight-light">[{{ $users->count() }}]</span> SESSIONS</h2>
  <div style="display: none">
    @foreach($events as $event)
    @foreach($event->sessions as $session)
    <a href="#" class="btn btn-event btn-sm mr-3"><i class="fas fa-trash mr-3"></i> Supprimer</a>
    {{ $session->name }}
    @endforeach
    @endforeach
  </div>

</div>

@endsection



@section('js')
@endsection



@section('css')
@endsection