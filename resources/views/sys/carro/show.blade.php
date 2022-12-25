@extends('adminlte::page')

@section('content')

<div class="row">
	<div class="col-12 mt-3">
		<div class="card card-outline card-dark">
			<div class="card-header">
		        <h3 class="card-title"><i class="fas fa-grip-horizontal"></i> Carro {{ $carro->nome ?? '' }}</h3>
		        <div class="card-tools">
		        	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		        	<button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
		        </div>
		    </div> {{-- end card header --}}
		    <div class="card-body">
	        	<div class="row">
	        		<div class="col-12 col-md-3">
		    			<b>N° Carro : </b> {{ $carro->id }}
		    		</div>
	        		<div class="col-6 col-md-3">
	        			<b>Carro : </b> {{ $carro->nome }}
	        		</div>
	        		<div class="col-6 col-md-3">
	        			<b>Proprietário do carro : </b> {{ $carro->user->name }}
	        		</div>
	        		<div class="col-6 col-md-3">
	        			<b>Placa : </b> {{ $carro->placa }}
	        		</div>   				    					    		
	        	</div>{{-- end row --}}
	        	<div class="row">
	        		<div class="col-6 col-md-3">
	        			<b>Marca : </b> {{ $carro->marca }}
	        		</div> 
	        		<div class="col-6 col-md-3">
	        			<b>Modelo : </b> {{ $carro->modelo }}
	        		</div>
	        		<div class="col-6 col-md-3">
	        			<b>Versão : </b> {{ $carro->versao }}
	        		</div>
	        		<div class="col-6 col-md-3">
	        			<b>Ano : </b> {{ $carro->ano }}
	        		</div>
	        	</div>{{-- end row --}}
	        	<hr>
	        	<div class="row">
	        		<div class="col-12">
		    			<a class="btn btn-sm btn-secondary" href="{{route('sys.carros.index')}}"><i class="fas fa-backward"></i>
		    				Voltar
		    			</a>
		    			<a class="btn btn-sm btn-info" href="{{route('sys.carros.edit', $carro->id)}}" title="Detalhes">
	    					<i class="fas fa-pencil-alt"></i> Editar
	    				</a>
	        		</div>
	        	</div>{{-- end row --}}
		    </div>{{-- end cardbody --}}
		</div> {{-- end card --}}
	</div>{{-- end col12 --}}
</div>{{-- end row --}}

@stop