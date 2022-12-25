@extends('adminlte::page')

@section('page','manutencaos')

@section('content')

	<div class="row">
		<div class="col-12">

			<div class="row text-right">
				<div class="col-12 mt-3">
					<a class="btn btn-dark btn-sm" href="{{route('sys.manutencoes.create')}}"><i class="fas fa-plus-circle"></i> Adicionar Manutenção</a>
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-3">
					<div class="table-responsive-xl tableFixHead" style="height: 65vh">
						<table class="table table-borderless table-striped table-hover table-sm">
							<thead class="thead-dark">
								<tr>
									<th>Data</th>
									<th>Tipo</th>
									<th>Carro</th>
									<th>Valor</th>
									<th>Observação</th>
									<th>Status</th>
									<th width="90px;">Ações</th>
								</tr>
							</thead>
							<tbody>
								@forelse( $manutencoes as $manutencao)
									<tr @if($manutencao->realizada) class="text-muted" @endif>
										<td>{{ date('d/m/Y', strtotime($manutencao->data)) }}</td>
										<td>{{$manutencao->tipoManutencao->descricao}}</td>
										<td>{{$manutencao->carro->nome}}</td>
										<td>R${{ number_format($manutencao->valor,2,',','.') }}</td>
										<td>{{$manutencao->observacao}}</td>
										<td>
											@if($manutencao->realizada)
												Realizada
											@else
												Não realizada
											@endif
										</td>
										<td>
												<a href="{{route('sys.manutencoes.show',$manutencao->id)}}" class="btn btn-sm btn-secondary" title="Ver">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="btn btn-danger btn-sm actions" title="Excluir" onclick='deletar("/sys/manutencoes/{{$manutencao->id}}")'>
													<i class="fas fa-trash"></i>
												</a>		      	
										</td>
									</tr>
								@empty
								<tr>
									<td colspan="7">Nenhum registro encontrado</td>
								</tr>
								@endforelse
							</tbody>
						</table>											
					</div>
					<nav>
						@if( isset($filter) )
							{!! $manutencoes->appends($filter)->links() !!}
						@else
							{{ $manutencoes->links() }}
						@endif
					</nav>
				</div> {{-- end col-12 --}}
			</div> {{-- end row --}}

		</div> {{-- end col-12 --}}
	</div> {{-- end row --}}

@stop