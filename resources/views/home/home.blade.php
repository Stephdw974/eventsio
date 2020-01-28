@extends('layouts.app')



@section('content')

@auth
<div class="container bg-event rounded-0 border mb-4">
  <div class="btn-group">
    <a href="{{ route('events.showEventCreation') }}" class="btn btn-sm btn-event rounded-0">Créer un nouvel événement</a>
  </div>
</div>
@endauth

<div class="container bg-white rounded-0 border p-3">

</div>

@endsection



@section('js')
@endsection



@section('css')
@endsection