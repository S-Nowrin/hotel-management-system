@extends('layouts.dashboard')
@section('content')
<h2>Car List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">No Plate</th>
              <th scope="col">driver</th>
            </tr>
          </thead>
          @foreach($cars as $car)
          <tbody>
            <tr>
              <td>{{$car->id}}</td>
              <td>{{$car->no_plate}}</td>
              <td>{{$car->driver->name}}</td>
        
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection