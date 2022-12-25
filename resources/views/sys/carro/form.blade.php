<div class="col-12 mt-2">
	@csrf
	<input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
	<div class="form-row">
		<div class="form-group col-12 col-md-5">
			<label for="nome">* Nome</label>
			<input type="text" class="form-control form-control-sm @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="Nome do carro" maxlength="60" value="{{$carro->nome ?? old('nome')}}" required autofocus>
			@error('nome')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-12 col-md-3">
			<label for="placa">* Placa</label>
			<input type="text" class="form-control form-control-sm @error('placa') is-invalid @enderror" id="placa" name="placa" placeholder="AAA-0000" maxlength="12" value="{{$carro->placa ?? old('placa')}}" required>
			@error('placa')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>	
		<div class="form-group col-12 col-md-4">
			<label for="marca">* Marca</label>
			<input type="text" class="form-control form-control-sm @error('marca') is-invalid @enderror" id="marca" name="marca" placeholder="Marca" maxlength="60" value="{{$carro->marca ?? old('marca')}}" required>
			@error('marca')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>					
	</div>
	<div class="form-row">
		<div class="form-group col-12 col-md-4">
			<label for="modelo">* Modelo</label>
			<input type="text" class="form-control form-control-sm @error('modelo') is-invalid @enderror" id="modelo" name="modelo" placeholder="Modelo" maxlength="60" value="{{$carro->modelo ?? old('modelo')}}" required>
			@error('modelo')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-12 col-md-4">
			<label for="versao">* Versão</label>
			<input type="text" class="form-control form-control-sm @error('versao') is-invalid @enderror" id="versao" name="versao" placeholder="Versão" maxlength="60" value="{{$carro->versao ?? old('versao')}}" required>
			@error('versao')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-12 col-md-4">
			<label for="ano">* Ano</label>
			<input type="text" class="form-control form-control-sm @error('ano') is-invalid @enderror" id="ano" name="ano" placeholder="Ano" maxlength="4" value="{{$carro->ano ?? old('ano')}}" required>
			@error('ano')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>							
	</div>					
	<a class="btn btn-light btn-sm mb-3" href="{{route('sys.carros.index')}}"><i class="fas fa-backward"></i> Voltar</a>
	@if( isset($carro) )
		<button type="submit" class="btn btn-primary btn-sm mb-3"><i class="far fa-save"></i> Atualizar</button>
	@else
		<button type="submit" class="btn btn-primary btn-sm mb-3"><i class="far fa-save"></i> Salvar</button>
	@endif
</div>

