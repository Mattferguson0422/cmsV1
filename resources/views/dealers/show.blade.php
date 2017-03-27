@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
	      <h1>{{ $dealer->name }}</h1>

				<form action="/dealers/{{ $dealer->id }}" method="POST" enctype="multipart/form-data">
	        {{ method_field('PATCH') }}
	        {{ csrf_field() }}
					<div class="form-group">
							<label for="name">name</label>
	            <input type="text" name="name" class="form-control" value="{{ $dealer->name }}">
	        </div>
					<div class="form-group">
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
	        </div>
					<!-- <input type="hidden" name="promotion_id" value="1"> -->
	        <div class="form-group">
	            <button type="submit" name="button" class="btn btn-primary">Update Dealer</button>
	        </div>
	      </form>

	      @if (count($errors))
	        <ul>
	          @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	          @endforeach
	        </ul>
	      @endif
	      <p class="goback"><a href="/dealers">Go Back &#8629;</a></p>
			</div>
  </div>
@stop
