<div id="newSession" class="container bg-white border rounded-0 mb-4 text-center text-sm-left">
  @if ($errors->any())
  <div class="alert alert-danger">
    <b>Erreur !</b><br>
    @foreach ($errors->all() as $error) {{ $error }}<br> @endforeach
  </div>
  @endif

  <form action="{{ route('events.newSession', $Evenement->id) }}" method="post" class="form">
    @csrf
    <div class="row my-2">
      <div class="col-sm-2 mb-2 mb-sm-0 my-sm-auto">
        <div class="h6 my-auto">Ajouter une session</div>
      </div>
      <div class="col-sm-4 mb-2 mb-sm-0">
        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control rounded-0" placeholder="Lieu de l'événement">
      </div>
      <div class="col-sm-2 mb-2 mb-sm-0">
        <input type="datetime-local" name="start_at" value="{{ old('start_at') }}" id="start_at" class="form-control rounded-0" placeholder="Lieu de l'événement">
      </div>
      <div class="col-sm-2 mb-2 mb-sm-0">
        <input type="datetime-local" name="end_at" value="{{ old('end_at') }}" id="end_at" class="form-control rounded-0" placeholder="Lieu de l'événement">
      </div>
      <div class="col-sm-2 mb-2 mb-sm-0">
        <button type="submit" class="btn btn-primary rounded-0 w-100">Ajouter</button>
      </div>
    </div>
  </form>
</div>