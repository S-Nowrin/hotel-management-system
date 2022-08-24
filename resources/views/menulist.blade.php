@extends('layouts.dashboard')
@section('content')
<h2>menu List</h2>
@if(Auth::user()->isAdmin())
<div col-6>
  <a type="button" class="btn btn-info" href="{{route('menu.create')}}">Add</a>
</div>
@endif
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">items</th>
              <th scope="col">type</th>
              <th scope="col">price</th>
            </tr>
          </thead>
          @foreach($menus as $menu)
          <tbody>
            <tr>
              <td>{{$menu->id}}</td>
              <td>{{$menu->items}}</td>
              <td>{{$menu->type}}</td>
              <td>{{$menu->price}}</td>        
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      @endsection