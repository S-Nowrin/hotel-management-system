@extends('layouts.dashboard')
@section('content')
<h2>Facility List</h2>
@if(Auth::user()->isAdmin())
<div col-6>
  <a type="button" class="btn btn-info" href="{{route('facility.create')}}">Add</a>
</div>
@endif
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pick up</th>
              <th scope="col">Drop off</th>
              <th scope="col">Car Brand</th>
              <th scope="col">Driver</th>
              <th scope="col">Cost</th>
            </tr>
          </thead>
          @foreach($facilities as $facility)
          <tbody>
            <tr>
              <td>{{$facility->id}}</td>
              <td>{{$facility->pick_location}}</td>
              <td>{{$facility->drop_location}}</td>
              <td>{{$facility->car->brand}}</td>
              <td>{{$facility->car->driver->name}}</td>
              <td>{{$facility->cost}}</td>

            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection