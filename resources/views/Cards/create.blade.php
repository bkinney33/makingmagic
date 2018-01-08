@extends('layouts.master')
@section('content')
@include('partials.errors')
<div class="row">
  <div class="col-md-12">
      <form action="{{ route('Cards.create') }}" method="post">
          <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
              <label for="content">Mana Cost</label>
              <input type="text" class="form-control" id="manacost" name="manacost">
          </div>
          <div class="form-group">
              <label for="content">Super type</label>
              <input type="text" class="form-control" id="supertype" name="supertype">
          </div>
          <div class="form-group">
              <label for="content">Type</label>
              <input type="text" class="form-control" id="type" name="type">
          </div>
          <div class="form-group">
            <label for="content">Power</label>
            <input type="text" class="form-control" id="power" name="power">
        </div>
        <div class="form-group">
            <label for="content">Toughness</label>
            <input type="text" class="form-control" id="toughness" name="toughness">
        </div>
        <div class="form-group">
            <label for="content">Abilities</label>
            <input type="text" class="form-control" id="abilities" name="abilities">
        </div>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
