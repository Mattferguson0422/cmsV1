@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Edit Promotion</h1>

      <form action="/promotions/{{ $promotion->id }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
						<label for="title">Name of Promotion</label>
            <input type="text" name="title" class="form-control" value="{{ $promotion->title }}">
				</div>
				<div class="form-group">
						<label for="description">Description Copy</label>
						<input type="text" name="description" class="form-control" value="{{ $promotion->description }}">
				</div>
				<div class="form-group">
						<label for="images">Images for slide show</label>
						<input type="file" name="images" class="form-control">
				</div>
				<div class="form-group">
					<label for="start">Enter the Start of Promotion</label>
					<input type="datetime-local" name="start">
					<p>Currently set to {{ $promotion->start }}</p>
				</div>
				<div>
					<label for="start">Enter the End of Promotion</label>
					<input type="datetime-local" name="end">
					<p>Currently set to {{ $promotion->end }}</p>
				</div>
	      <div class="form-group">
	          <button type="submit" name="button" class="btn btn-primary">Update Promotion</button>
	      </div>
      </form>
    </div>
  </div>

@stop
