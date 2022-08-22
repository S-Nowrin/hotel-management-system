@extends('layouts.dashboard')
@section('content')
<h2>Room List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">designation</th>
              <th scope="col">salary</th>
            </tr>
          </thead>
          @foreach($employees as $employee)
          <tbody>
            <tr>
              <td>{{$employee->id}}</td>
              <td>{{$employee->name}}</td>
              <td>{{$employee->designation}}</td>
              <td>{{$employee->salary}}</td>
        
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection