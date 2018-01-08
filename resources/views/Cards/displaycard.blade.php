@extends('layouts.master')
@section('content')
@foreach($cards as $card)
  <div class="row">
      <div class="col-md-12">
          <p><strong>{{ $card->name }}</strong></p>
          <p><strong>{{ $card->manacost }}</strong></p>
          <p><strong>{{ $card->supertype }}</strong></p>
          <p><strong>{{ $card->type }}</strong></p>
          <p><strong>{{ $card->power }} / {{ $card->toughness }}</strong></p>
          <p><strong>{{ $card->abilities }}</strong></p>
      </div>
  </div>
  @endforeach
@endsection
