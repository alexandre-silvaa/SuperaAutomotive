<div class="col-12 mt-2">
	@csrf
	<input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
	<div class="form-row">
		<div class="form-group col-12 col-md-4">
			<label for="tipo_manutencao_id">* Tipo de manutenção</label>
			<select name="tipo_manutencao_id" id="tipo_manutencao_id" class="form-control form-control-sm @error('tipo_manutencao_id') is-invalid @enderror" required>
				<option value="">Escolha</option>
					@foreach($tipos as $tipo)							
						<option value="{{$tipo->id}}"
							@if( old('tipo_manutencao_id') == $tipo->id)
							selected
						@endif
						@if( isset($manutencao->tipo_manutencao_id) && ($manutencao->tipo_manutencao_id == $tipo->id))
							selected 
						@endif
						>{{$tipo->descricao}}
						</option>        		    			
					@endforeach
			</select>
			@error('tipo_manutencao_id')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-12 col-md-4">
			<label for="carro_id">* Carro</label>
			<select name="carro_id" id="carro_id" class="form-control form-control-sm @error('carro_id') is-invalid @enderror" required>
				<option value="">Escolha</option>
					@foreach($carros as $carro)							
						<option value="{{$carro->id}}"
							@if( old('carro_id') == $carro->id)
							selected
						@endif
						@if( isset($manutencao->carro_id) && ($manutencao->carro_id == $carro->id)) 
							selected 
						@endif
						>{{$carro->nome}}
						</option>        		    			
					@endforeach
			</select>
			@error('carro_id')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-12 col-md-2">
			<label for="valor">* Valor</label>
			<input type="text" class="form-control form-control-sm @error('valor') is-invalid @enderror" id="valor" name="valor" placeholder="00.00" value="{{$manutencao->valor ?? old('valor')}}" required>
			@error('valor')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>	
		<div class="form-group col-12 col-md-2">
			<label for="data">* Data</label>
			<input type="date" class="form-control form-control-sm @error('data') is-invalid @enderror" id="data" name="data" value="{{$manutencao->data ?? old('data')}}" required>
			@error('data')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>					
	</div>
	<div class="form-row">
		<div class="form-group col-12">
			<label for="observacao">* Observação</label>
			<input type="text" class="form-control form-control-sm @error('observacao') is-invalid @enderror" id="observacao" name="observacao" placeholder="Observação" maxlength="200" value="{{$manutencao->observacao ?? old('observacao')}}" required>
			@error('observacao')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>						
	</div>
	<div class="form-row">
	 	<div class="form-group">
			<div class="form-check m-2">
				@if( isset($manutencao->realizada) && ($manutencao->realizada == 1))
					<input class="form-check-input" type="checkbox" id="realizada" name="realizada" value="1" checked>
				@else
					<input class="form-check-input" type="checkbox" id="realizada" name="realizada" value="1" {{ old('realizada') == 1 ? 'checked' : '' }}>
				@endif
				<label class="form-check-label" for="realizada">
					 Realizada
				</label>
			</div>
		</div>						
	</div>					
	<a class="btn btn-light btn-sm mb-3" href="{{route('sys.manutencoes.index')}}"><i class="fas fa-backward"></i> Voltar</a>
	@if( isset($manutencao) )
		<button type="submit" class="btn btn-primary btn-sm mb-3"><i class="far fa-save"></i> Atualizar</button>
	@else
		<button type="submit" class="btn btn-primary btn-sm mb-3"><i class="far fa-save"></i> Salvar</button>
	@endif
</div>

