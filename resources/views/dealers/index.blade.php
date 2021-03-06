@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
			@if(count($dealers) < 1)
				<h1>There are no dealers at this time</h1>
			@else
	      <h1>All Dealers</h1>
	      <ul class="list-group">
	        @foreach ($dealers as $dealer)
	          <li class="list-group-item"><a href="/dealers/{{ $dealer->id }}/edit">{{ $dealer->name }}</a>
	            <form action="/dealers/{{ $dealer->id }}" method="POST">
	              {{ csrf_field() }}
	              {{ method_field('DELETE') }}

	              <button class="btn btn-primary">Delete</button>
	            </form>
							<a href="/dealers/{{ $dealer->id }}/edit" class="btn">Edit</a>
	          </li>
	        @endforeach
	      </ul>
			@endif

      <h3>Add a new Dealers</h3>

      <form action="/dealers" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
						<label for="name">name</label>
            <input type="text" name="name" class="form-control">
        </div>
				<!-- <div class="form-group">
						<label for="street">street</label>
            <input type="text" name="street" class="form-control">
        </div>
				<div class="form-group">
						<label for="city">city</label>
            <input type="text" name="city" class="form-control">
        </div>
				<div class="form-group">
						<label for="state">state</label>
            <input type="text" name="state" class="form-control">
        </div>
				<div class="form-group">
						<label for="zip">zip</label>
            <input type="text" name="zip" class="form-control">
        </div>
				<div class="form-group">
						<label for="phone">phone</label>
            <input type="phone" name="phone" class="form-control">
        </div>
				<div class="form-group">
						<label for="website">website</label>
            <input type="text" name="website" class="form-control">
        </div>
				<div class="form-group">
						<label for="facebook">facebook</label>
            <input type="text" name="facebook" class="form-control">
        </div>
				<div class="form-group">
						<label for="twitter">twitter</label>
            <input type="text" name="twitter" class="form-control">
        </div>
				<div class="form-group">
						<label for="logo">logo</label>
            <input type="file" name="logo" class="form-control">
        </div> -->
				<!-- <input type="hidden" name="promotion_id" value="1"> -->
        <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">Add</button>
        </div>
      </form>
      @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <p class="goback"><a href="/dashboard">Go Back &#8629;</p>
    </div>

  </div>

@stop
