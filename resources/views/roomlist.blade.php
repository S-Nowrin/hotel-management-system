@extends('layouts.dashboard')
@section('content')
<h2>Room List</h2>
@if(Auth::user()->isAdmin())
<div col-6>
  <a type="button" class="btn btn-info" href="{{route('room.create')}}">Add</a>
</div>
@endif
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
              <td><a type="button" href="{{ URL::route('booking.book', $room->id) }}" class="btn btn-success">Booking</a></td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection