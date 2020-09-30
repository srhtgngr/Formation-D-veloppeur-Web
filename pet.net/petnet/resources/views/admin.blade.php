@extends('layouts.app')

@section('content')

<div class="container">
  @foreach ($data as $item)
    <div class="card p-2 m-4">
      <div class="card-header">
        <div class="row justify-content-between pl-2">
          <div class="col">
            <dt>{{$item->sujet}}</dt>
          </div>
          <div class="col">
            <button type="button" class="btn btn-secondary " data-toggle="modal" data-target="">Répondre</button>
            <button type="button" class="btn btn-secondary " data-toggle="modal" data-target="">Effacer</button>
          </div>
        </div>
      </div>
      <div class="card-body text-muted">
        <small>
          <em>
            Message de <strong>{{$item->expediteur}}</strong>
            envoyé le {{$item->created_at->format('d/m/Y')}} 
            à {{$item->created_at->format('H:m:s')}}
          </em>
        </small>
        <hr style="width: 80%">
        <p>{{$item->contenu}}</p>
      </div>
    </div>
  @endforeach
</div>
@endsection