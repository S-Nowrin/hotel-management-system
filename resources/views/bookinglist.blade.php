@extends('layouts.dashboard')
@section('content')
<h2>Car List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">client name</th>
              <th scope="col">client nid</th>
              <th scope="col">room</th>
              <th scope="col">check_in</th>
              <th scope="col">check_out</th>
              <th scope="col">deposit</th>
            </tr>
          </thead>
          @foreach($bookings as $booking)
          <tbody>
            <tr>
              <td>{{$booking->id}}</td>
              <td>{{$booking->client->name}}</td>
              <td>{{$booking->client->nid}}</td>
              <td>{{$booking->room->room_number}}</td>
              <td>{{$booking->check_in}}</td>
              <td>{{$booking->check_out}}</td>
              <td>{{$booking->deposit}}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection