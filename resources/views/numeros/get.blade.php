@extends('layouts.app')

@section('content')

<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
	  	<h5 class="card-title">GET</h5>

	  	<div class="row">
	    	<div class="col-6 text-center">
	    		<div>
	    			<h4 class="list-group-item">Número generado</h4>
	    		</div>
	  		</div>
	    	<div class="col-6 text-center">
	    		<div>
					<h4 class="list-group-item">Cantidad de números generados</h4>
	    		</div>
	  		</div>
	  	</div>

	  	<div class="row">
	    	<div class="col-6 text-center">
	    		<div>
	    			<h4 class="list-group-item mt-2">{{ $results['rand'] }}</h4>
	    		</div>
	  		</div>
	    	<div class="col-6 text-center">
	    		<div>
					<h4 class="list-group-item mt-2">{{ $results['count'] }}</h4>
	    		</div>
	  		</div>
	  	</div>
	  </div>
	  <div class="card-footer">
	  	<div class="row">
	  		<div class="col-6">
	  			<form role="form" method="get" action="{{action('NumerosController@verbs')}}">
			  		<input type="hidden" name="reload" value="0">
			  		<div class="w-100 text-center">
			  			<button type="submit" class="btn btn-primary">Recargar</button>
			  		</div>
			  	</form>
	  		</div>
	  		<div class="col-6">
	  			<form role="form" method="post" action="{{action('NumerosController@verbs')}}">
			  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  		<div class="w-100 text-center">
			  			<button type="submit" class="btn btn-primary">Leer Números</button>
			  		</div>
			  	</form>
	  		</div>
	  	</div>
			  	
	  </div>
	</div>
</div>
@endsection