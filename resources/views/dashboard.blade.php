@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome {{ Auth::user()->name }}
                </div>
            </div>
						<div class="panel panel-default">
                <div class="panel-heading"><a href="/dealers">Go to Dealers</a></div>
            </div>
						<div class="panel panel-default">
                <div class="panel-heading"><a href="/promotions">Go to Promotions</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
