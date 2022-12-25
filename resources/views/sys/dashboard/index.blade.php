@extends('adminlte::page')

@section('content')         

  <div class="row">
    <div class="col-12 mt-3">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Carros Cadastrados</h3>
          <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive-xl tableFixHead">
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
                  <th>Ver</th>
                </tr>
              </thead>
              <tbody>
                @forelse( $meusCarros as $carro)
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Total de carros cadastrados: {{ $qtdCarros }}
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div> {{-- end col-12 --}}
  </div> {{-- end row --}}

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Manutenções Previstas</h3>
          <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive-xl tableFixHead">
            <table class="table table-borderless table-striped table-hover table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>Data</th>
                  <th>Tipo</th>
                  <th>Carro</th>
                  <th>Valor</th>
                  <th>Observação</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @forelse( $proximas as $proxManutencao)
                  <tr>
                    <td>{{ date('d/m/Y', strtotime($proxManutencao->data)) }}</td>
                    <td>{{$proxManutencao->tipoManutencao->descricao}}</td>
                    <td>{{$proxManutencao->carro->nome}}</td>
                    <td>R${{ number_format($proxManutencao->valor,2,',','.') }}</td>
                    <td>{{$proxManutencao->observacao}}</td>
                    <td>
                      @if($proxManutencao->realizada)
                        Realizada
                      @else
                        Não realizada
                      @endif
                    </td>
                    <td>
                        <a href="{{route('sys.manutencoes.show',$proxManutencao->id)}}" class="btn btn-sm btn-secondary" title="Ver">
                          <i class="fas fa-eye"></i>
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Total de manutenções previstas: {{ $qtdManutencoes }}
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div> {{-- end col-12 --}}
  </div> {{-- end row --}}

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Manutenções Realizadas</h3>
          <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive-xl tableFixHead">
            <table class="table table-borderless table-striped table-hover table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>Data</th>
                  <th>Tipo</th>
                  <th>Carro</th>
                  <th>Valor</th>
                  <th>Observação</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @forelse( $realizadas as $realizada)
                  <tr>
                    <td>{{ date('d/m/Y', strtotime($realizada->data)) }}</td>
                    <td>{{$realizada->tipoManutencao->descricao}}</td>
                    <td>{{$realizada->carro->nome}}</td>
                    <td>R${{ number_format($realizada->valor,2,',','.') }}</td>
                    <td>{{$realizada->observacao}}</td>
                    <td>
                      @if($realizada->realizada)
                        Realizada
                      @else
                        Não realizada
                      @endif
                    </td>
                    <td>
                        <a href="{{route('sys.manutencoes.show',$realizada->id)}}" class="btn btn-sm btn-secondary" title="Ver">
                          <i class="fas fa-eye"></i>
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Total de manutenções previstas: {{ $qtdRealizadas }}
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div> {{-- end col-12 --}}
  </div> {{-- end row --}}

@stop