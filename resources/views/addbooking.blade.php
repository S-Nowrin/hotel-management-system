@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD Booking</h4>
        <form class="needs-validation" method="POST" action="{{ route('booking.store') }}">
            @csrf
          <div class="row g-3">
          <div class="col-12">
              <label for="car_nameplate" class="form-label">Client</label>
              <select name="client_id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                @foreach($clients as $client)
                    @if($client->isClient())
                <option value="{{$client->id}}">{{$client->name}}</option>
                @endif
                @endforeach
             </select>
          </div>
          <div class="col-12">
            <label for="car_nameplate" class="form-label">Room</label>
            <select name="room_id" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
              @foreach($rooms as $room)
              <option value="{{$room->id}}">{{$room->room_number}}</option>
              @endforeach
           </select>
           <div class="col-12">
            <label for="car_nameplate" class="form-label">Check In</label>
            <input type="date" class="form-control" id="check_in" name="check_in">
        </div>
        <div class="col-12">
            <label for="car_nameplate" class="form-label">Check out</label>
            <input type="date" class="form-control" id="check_out" name="check_out">
        </div>
        <div class="col-12">
            <label for="deposit" class="form-label">Deposit</label>
            <input type="text" class="form-control" id="deposit" name="deposit">
        </div>
        </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
</div>
@endsection