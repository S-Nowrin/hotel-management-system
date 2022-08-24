@extends('layouts.dashboard')
@section('content')
<h2>Driver List</h2>
<div col-6>
  <a type="button" class="btn btn-info" href="{{route('driver.create')}}">Add</a>
</div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">nid</th>
            </tr>
          </thead>
          @foreach($drivers as $driver)
          <tbody>
            <tr>
              <td>{{$driver->id}}</td>
              <td>{{$driver->name}}</td>
              <td>{{$driver->nid}}</td>
        
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection