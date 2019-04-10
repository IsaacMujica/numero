@extends('layouts.app')

@section('content')

<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
	    <h5 class="card-title">POST</h5>
	    
	    <div class="row">
	    	@foreach ($results as $index => $result)
	    	<div class="col-4 text-center">
	    		<div class="list-group-item m-2">
					<h4>{{ $index+1 }}) {{ $result }}</h4>
				</div>
			</div>
			@endforeach
	    </div>
	  </div>
	  <div class="card-footer">
	  	<div class="row">
	  		<div class="col-6">
	  			<form role="form" method="get" action="{{action('NumerosController@verbs')}}">
			  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  		<div class="w-100 text-center">
			  			<button type="submit" class="btn btn-primary">Volver Número Aleatorio</button>
			  		</div>
			  	</form>
	  		</div>
	  		<div class="col-6">
	  			<form role="form" method="post" action="{{action('NumerosController@verbs')}}">
			  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  		<input type="hidden" name="clean" value="0">
			  		<div class="w-100 text-center">
			  			<button type="submit" class="btn btn-primary">Vaciar JSON</button>
			  		</div>
			  	</form>
	  		</div>
	  	</div>
			  	
	  </div>
	</div>
</div>
@endsection