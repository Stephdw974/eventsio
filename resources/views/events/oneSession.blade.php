@extends('layouts.app')



@section('content')

@auth
<div class="container bg-event border rounded mb-4 text-center text-sm-left">
  <div class="btn-group">
    <button class="btn btn-event">Participer à la session</button>
    @if($Evenement->user->id == Auth::id())
    <a href="{{ route('events.showSessionEdition', [$Evenement->id, $Session->id]) }}" class="btn btn-event rounded-0">Editer la session</a>
    <a href="#" onClick="$('#deleteSession').submit()" class="btn btn-event rounded-0">Supprimer la session</a>

    <form id="deleteSession" action="{{ route('events.deleteSession', [$Evenement->id, $Session->id]) }}" method="POST" style="display: none;">
      @csrf
      {{ method_field('DELETE') }}
    </form>
 
    @endif
  </div>
</div>
@endauth

<div id="Session" class="container bg-white border rounded p-0 mb-4 text-center text-sm-left">
  <h1 class="border-bottom m-0 p-3">{{ $Session->name }}</h1>
  <div class="p-3">
    <b>Commence le : </b>{{ $Session->start_at }}<br>
    <b>Termine le : </b>{{ $Session->end_at }}<br>
  </div>
</div>



@endsection


@section('js')

<script>
  window.onload = function() {
    $('.sessionItem').on('click', function() {
      window.location.href = '/events/' + $(this).attr('evenement-id') + '/sessions/' + $(this).attr('session-id')
    })
  }
</script>

@endsection



@section('css')
<style>
  #Sessions>div:hover {
    background: #efefef;
    cursor: pointer
  }
</style>
@endsection