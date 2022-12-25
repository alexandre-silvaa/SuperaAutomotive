@extends('adminlte::page')

@section('page','Atualizando Carro')

@section('content')

	<div class="row justify-content-md-center">
		<div class="col-12 mt-3">
			<form action="{{route('sys.carros.update', $carro->id)}}" method="POST">
				@method('PUT')
				<div class="card">
					<div class="card-header bg-dark">
					 	<h3 class="card-title mt-1">Editar de Carro</h3>
					 	<div class="card-tools">
				       	<!-- Collapse Button -->
				       		<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
				    	</div>
					</div>
					<div class="card-body">
					  @include('sys.carro.form')
					</div>
				</div>
			</form>
		</div>
	</div>

@stop