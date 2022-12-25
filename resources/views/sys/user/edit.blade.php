@extends('adminlte::page')

@section('content')

	<div class="row justify-content-md-center">
		<div class="col-12 mt-3">
			<form action="{{route('sys.users.update', $user->id)}}" method="POST">
				@method('PUT')
				<div class="card">
					<div class="card-header bg-dark">
					 	<h3 class="card-title mt-1">Editar Seu Perfil</h3>
					 	<div class="card-tools">
				       	<!-- Collapse Button -->
				       		<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
				    	</div>
					</div>
					<div class="card-body">
					  @include('sys.user.form')
					</div>
				</div>
			</form>
		</div>
	</div>

@stop