@extends('layouts.dashboard')
@section('content')
<h2>Room List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Room Number</th>
              <th scope="col">Floor</th>
              <th scope="col">Bed Type</th>
              <th scope="col">Cleaning status</th>
              <th scope="col">Cost</th>
              <th scope="col">Booking</th>
            </tr>
          </thead>
          @foreach($rooms as $room)
          <tbody>
            <tr>
              <td>{{$room->id}}</td>
              <td>{{$room->room_number}}</td>
              <td>{{$room->floor}}</td>
              <td>{{$room->bed_type}}</td>
              <td>{{$room->cleaning_status}}</td>
              <td>{{$room->cost}}</td>
              <td><button type="button" class="btn btn-success">Booking</button></td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection