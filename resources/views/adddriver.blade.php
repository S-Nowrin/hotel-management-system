@extends('layouts.dashboard')
@section('content')
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ADD DRIVER</h4>
        <form class="needs-validation" method="POST" action="{{ route('driver.store') }}">
            @csrf
          <div class="row g-3">

          <div class="col-12">
              <label for="driver_name" class="form-label">Driver Name</label>
              <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="col-12">
              <label for="nid" class="form-label">Driver nid</label>
              <input type="text" class="form-control" id="nid" name="nid">
          </div>
          <button class="w-100 btn btn-primary btn-lg" type="submit">ADD</button>
        </form>
</div>
@endsection