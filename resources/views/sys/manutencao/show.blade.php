@extends('adminlte::page')

@section('content')

<div class="row">
	<div class="col-12 mt-3">
		<div class="card card-outline card-dark">
			<div class="card-header">
		        <h3 class="card-title"><i class="fas fa-grip-horizontal"></i> Manutenção {{ $manutencao->id ?? '' }}</h3>
		        <div class="card-tools">
		        	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		        	<button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
		        </div>
		    </div> {{-- end card header --}}
		    <div class="card-body">
		    	<div class="row">
		    		<div class="col-12">
		    			<b>N° Manutenção : </b> {{ $manutencao->id }}
		    		</div>
		    	</div>{{-- end row --}}
	        	<div class="row">
	        		<div class="col-6 col-md-4">
	        			<b>Tipo de manutenção : </b> {{ $manutencao->tipoManutencao->descricao }}
	        		</div>
	        		<div class="col-6 col-md-4">
	        			<b>Proprietário do carro : </b> {{ $manutencao->user->name }}
	        		</div>
	        		<div class="col-6 col-md-4">
	        			<b>Carro : </b> {{ $manutencao->carro->nome }}
	        		</div>    				    					    		
	        	</div>{{-- end row --}}
	        	<div class="row">
	        		<div class="col-6 col-md-4">
	        			<b>Data da Manutenção : </b>
	        			@isset($manutencao->data)
	        			    {{ date('d/m/Y', strtotime($manutencao->data)) }}
	        			@endisset
	        		</div>
	        		<div class="col-6 col-md-4">
	        			<b>Valor : </b>  R${{ number_format($manutencao->valor,2,',','.') }}
	        		</div>
	        		<div class="col-6 col-md-4">
	        			<b>Foi Realizada: </b>
	        			@if($manutencao->realizada == 1)
	        				Sim
	        			@else
	        				Não
	        			@endif
	        		</div>
	        	</div>{{-- end row --}}
	        	<div class="row">
	        		<div class="col-12">
	        			<b>Observação : </b> {{ $manutencao->observacao }}
	        		</div>
	        	</div>{{-- end row --}}
	        	<hr>
	        	<div class="row">
	        		<div class="col-12">
		    			<a class="btn btn-sm btn-secondary" href="{{route('sys.manutencoes.index')}}"><i class="fas fa-backward"></i>
		    				Voltar
		    			</a>
		    			<a class="btn btn-sm btn-info" href="{{route('sys.manutencoes.edit', $manutencao->id)}}" title="Detalhes">
	    					<i class="fas fa-pencil-alt"></i> Editar
	    				</a>
	        		</div>
	        	</div>{{-- end row --}}
		    </div>{{-- end cardbody --}}
		</div> {{-- end card --}}
	</div>{{-- end col12 --}}
</div>{{-- end row --}}

@stop