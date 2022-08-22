@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD ROOM</h4>
        <form class="needs-validation" method="POST" action="{{ route('room.store') }}">
            @csrf
          <div class="row g-3">

          <div class="col-12">
              <label for="room_number" class="form-label">Room Number</label>
              <input type="text" class="form-control" id="room_number" name="room_number">
          </div>
          <div class="col-12">
              <label for="floor" class="form-label">Floor</label>
              <input type="text" class="form-control" id="floor" name="floor">
          </div>
          <div class="col-12">
              <label for="bed_type" class="form-label">Bed Type</label>
              <input type="text" class="form-control" id="bed_type" name="bed_type">
          </div>
          <div class="col-12">
              <label for="cost" class="form-label">Cost</label>
              <input type="text" class="form-control" id="cost" name="cost">
          </div>
          <div class="col-12">
              <label for="cleaning_status" class="form-label">Cleaning Status</label>
              <input type="text" class="form-control" id="cleaning_status" name="cleaning_status">
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Add</button>
        </form>
</div>
@endsection