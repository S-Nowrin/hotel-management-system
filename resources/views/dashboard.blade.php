@extends('layouts.dashboard')

@section('content')
@if(Auth::user()->isAdmin())
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 title="Booked Revenue">Total Booking</h5>
                        <h3 class="my-2 py-1">{{$totalbooking}}</h3>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 title="Booked Revenue">Total Deposit</h5>
                        <h3 class="my-2 py-1">{{$totaldeposit}}</h3>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
@endif
@if(Auth::user()->isClient())
<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h2 title="Booked Revenue">Current Booking</h2>
                        @if(count($booking) >=1)
                        <h5 class="my-2 py-1">Room Number: {{$booking[0]->room->room_number}} <br>Checkin: {{$booking[0]->check_in}}</h5>
                        @endif
                        
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
@endif
@endsection
