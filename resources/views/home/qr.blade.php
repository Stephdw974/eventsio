@extends('layouts.app')



@section('content')

<div class="container bg-event rounded border mb-4">
  <div class="btn-group">
    <a href="{{ route('events.showEventCreation') }}" class="btn btn-sm btn-event">Créer un nouvel événement</a>
  </div>
</div>  

<div class="container bg-white rounded border p-3">
  <div class="row">
    <div class="col-4">
      <svg class="img-fluid w-100" id="barcode"></svg>
    </div>
    <div class="col-8 py-1">
      <h2>{{ $Participation->session->name }}</h2>
      @if($Participation->flashed_at)
      Ce QR Code a été scanné le {{ $Participation->flashed_at }}
      @endif

    </div>
  </div>
</div>

@endsection



@section('js')
<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/barcodes/JsBarcode.code128.min.js"></script>
<!-- <script src="{{ asset('js/barcode_128.js') }}"></script> -->
<script>
  $( () => {
    JsBarcode("#barcode", "1234", {
      lineColor: "#0aa",
      width: 4,
      height: 40,
      displayValue: false
    });
  })
</script>
@endsection



@section('css')
@endsection