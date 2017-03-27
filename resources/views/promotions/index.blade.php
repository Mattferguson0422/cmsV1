@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
			@if(count($promotions) < 1)
				<h1>There are no promotions at this time</h1>
			@else
	      <h1>All Promotions</h1>
	      <ul class="list-group">
	        @foreach ($promotions as $promotion)
	          <li class="list-group-item">
							<a href="/promotions/{{ $promotion->id }}">{{ $promotion->title }}</a>

							@if ($promotion->active == 1)
								<span><i>Active</i></span>
							@endif
	            <form action="/promotions/{{ $promotion->id }}" method="POST">
	              {{ csrf_field() }}
	              {{ method_field('DELETE') }}

	              <button class="btn btn-primary">Delete</button>
	            </form>
	          </li>
	        @endforeach
	      </ul>
			@endif

      <h3>Add a new Promotions</h3>

      <form action="/promotions" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="title" class="form-control">
        </div>
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
      <p class="goback"><a href="/dashboard">Go Back to Dashboard &#8629;</p>
    </div>

  </div>

@stop
