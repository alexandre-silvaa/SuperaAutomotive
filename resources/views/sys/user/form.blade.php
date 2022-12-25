<div class="col-12 mt-2">
	@csrf
	<input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
	<div class="form-row">
		<div class="form-group col-12 col-md-6">
			<label for="name">* Nome</label>
			<input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" placeholder="00.00" value="{{$user->name ?? old('name')}}" required>
			@error('name')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-12 col-md-4">
			<label for="email">Email</label>
			<input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" placeholder="00.00" value="{{$user->email ?? old('email')}}" required>
			@error('email')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>	
		<div class="form-group col-12 col-md-2">
			<label for="celular">Celular</label>
			<input type="text" class="form-control form-control-sm @error('celular') is-invalid @enderror" id="celular" name="celular" placeholder="15991300650" value="{{$user->celular ?? old('celular')}}">
			@error('celular')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>					
	</div>
	<div class="form-row">				
		<div class="form-group col-sm-12 col-md-6 col-lg-5 col-xl-3">
			<label for="password">* Senha</label>
			<input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" maxlength="20" @if(isset($user->password)) placeholder="***************" @endif>
			@if(isset($user->password))
				<small class="form-text text-muted">
					Preencher somente se desejar alterar a senha
				</small>
			@endif				
			@error('password')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
		<div class="form-group col-sm-12 col-md-6 col-lg-5 col-xl-3">
			<label for="password2">* Confirmar Senha</label>
			<input type="password" class="form-control form-control-sm @error('password2') is-invalid @enderror" id="password2" name="password2" maxlength="20" @if(isset($user->password)) placeholder="***************" @endif>
			@if(isset($user->password))
				<small class="form-text text-muted">
					Preencher somente se desejar alterar a senha
				</small>
			@endif
			@error('password2')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror
		</div>
	</div>				
	<a class="btn btn-light btn-sm mb-3" href="{{route('sys.dashboard')}}"><i class="fas fa-backward"></i> Voltar</a>
	<button type="submit" class="btn btn-primary btn-sm mb-3"><i class="far fa-save"></i> Atualizar</button>
</div>

