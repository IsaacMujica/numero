@extends('layouts.app')

@section('content')

<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
	    <h5 class="card-title">Title</h5>
	    
	    <ul class="list-group">
			<li class="list-group-item">{{ $result['number'] }}</li>
			<li class="list-group-item">{{ $result['json'] }}</li>
		</ul>
	  </div>
	</div>
</div>
@endsection