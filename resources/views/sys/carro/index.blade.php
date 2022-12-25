@extends('adminlte::page')

@section('page','Carros')

@section('content')

	<div class="row">
		<div class="col-12">

			<div class="row text-right">
				<div class="col-12 mt-3">
					<a class="btn btn-dark btn-sm" href="{{route('sys.carros.create')}}"><i class="fas fa-plus-circle"></i> Adicionar Carro</a>
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-3">
					<div class="table-responsive-xl tableFixHead" style="height: 65vh">
						<table class="table table-borderless table-striped table-hover table-sm">
							<thead class="thead-dark">
								<tr>
									<th>Carro</th>
									<th>Placa</th>
									<th>Marca</th>
									<th>Modelo</th>
									<th>Versão</th>
									<th>Ano</th>
									<th>Dono</th>
									<th width="90px;">Ações</th>
								</tr>
							</thead>
							<tbody>
								@forelse( $carros as $carro)
									<tr>
										<td>{{$carro->nome}}</td>
										<td>{{$carro->placa}}</td>
										<td>{{$carro->marca}}</td>
										<td>{{$carro->modelo}}</td>
										<td>{{$carro->versao}}</td>
										<td>{{$carro->ano}}</td>
										<td>{{$carro->user->name}}</td>
										<td>
												<a href="{{route('sys.carros.show', $carro->id)}}" class="btn btn-sm btn-secondary" title="Editar">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="btn btn-danger btn-sm actions" title="Excluir" onclick='deletar("/sys/carros/{{$carro->id}}")'>
													<i class="fas fa-trash"></i>
												</a>		      	
										</td>
									</tr>
								@empty
								<tr>
									<td colspan="8">Nenhum registro encontrado</td>
								</tr>
								@endforelse
							</tbody>
						</table>											
					</div>
					<nav>
						@if( isset($filter) )
							{!! $carros->appends($filter)->links() !!}
						@else
							{{ $carros->links() }}
						@endif
					</nav>
				</div> {{-- end col-12 --}}
			</div> {{-- end row --}}

		</div> {{-- end col-12 --}}
	</div> {{-- end row --}}

@stop