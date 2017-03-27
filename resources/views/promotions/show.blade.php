@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
	      <h1>{{ $promotion->title }}</h1>

				<form action="/promotions/{{ $promotion->id }}" method="POST" enctype="multipart/form-data">
	        {{ method_field('PATCH') }}
	        {{ csrf_field() }}
	        <div class="form-group">
							<label for="title">Name of Promotion</label>
	            <input type="text" name="title" class="form-control" value="{{ $promotion->title }}">
					</div>
					<div class="form-group">
							<label for="description">Description Copy</label>
							<textarea name="description" class="form-control">{{ $promotion->description }}</textarea>
					</div>
					<div class="form-group">
							<label for="image1">First Image for Slide Show</label>
							<input type="file" name="image1" class="form-control">
					</div>
					<div class="form-group">
							<label for="image2">Image for Slide Show</label>
							<input type="file" name="image2" class="form-control">
					</div>
					<div class="form-group">
							<label for="image3">Image for Slide Show</label>
							<input type="file" name="image3" class="form-control">
					</div>
					<div class="form-group">
						<label for="active">Activate Promotion</label>
						<input type="checkbox" name="active" value="1"@if ($promotion->active == 1) checked @endif>
					</div>
		      <div class="form-group">
		          <button type="submit" name="button" class="btn btn-primary">Update Promotion</button>
		      </div>
	      </form>

	      @if (count($errors))
	        <ul>
	          @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	          @endforeach
	        </ul>
	      @endif
	      <p class="goback"><a href="/promotions">Go Back &#8629;</a></p>

      <h3>Dealers currently running Promotion</h3>
				@foreach ($promotion->dealers as $dealer)
					{{ $dealer->name }}
				@endforeach

				<h3>Add dealers to promotion</h3>
				<form class="" action="" method="post">
					@foreach($dealers as $dealer)
					<input type="checkbox" name="promotion_id" value="{{ $promotion->id }}"><label for="promotion_id">{{ $dealer->name }}</label><br>
					@endforeach
				</form>
			</div>
  </div>
@stop
