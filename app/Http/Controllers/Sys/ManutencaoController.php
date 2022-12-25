<?php

namespace App\Http\Controllers\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ManutencaoRequest;
use App\Models\Manutencao;
use App\Models\TipoManutencao;
use App\Models\Carro;
use Auth;

class ManutencaoController extends Controller
{
    protected $request;
    protected $manutencao;
    protected $paginacao = 25;

    public function __construct(Request $request, Manutencao $manutencao)
    {
        $this->request = $request;      
        $this->manutencao  = $manutencao;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $manutencoes = Manutencao::orderBy('data')->where('user_id',$user->id)->paginate($this->paginacao);
        return view('sys.manutencao.index', compact('manutencoes'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $tipos = TipoManutencao::orderBy('descricao')->get();
        $carros = Carro::orderBy('nome')->where('user_id',$user->id)->get();
        return view('sys.manutencao.create', compact('tipos','carros','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManutencaoRequest $request)
    {
        $data = $request->all();
        //dd($data);
        $insert = Manutencao::create($data);
        
        if($insert){
            toastr()->success('Cadastro Realizado com Sucesso','Sucesso');
            return redirect()->route('sys.manutencoes.index');
        }
        toastr()->error('Erro ao Realizar Cadastro','Erro'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manutencao = Manutencao::with(['tipoManutencao','carro'])->find($id);
        return view('sys.manutencao.show', compact('manutencao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$manutencao = Manutencao::find($id) )
            return redirect()->back();

        $user = Auth::user();
        $tipos = TipoManutencao::orderBy('descricao')->get();
        $carros = Carro::orderBy('nome')->where('user_id',$user->id)->get();

        return view('sys.manutencao.edit', compact('manutencao','tipos','carros','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ManutencaoRequest $request, $id)
    {
        if( !$manutencao = Manutencao::find($id) )
            return redirect()->back();

        $data = $request->all();

        if(!isset($data['realizada']))
            $data['realizada'] = 0;
        
        $update = $manutencao->update($data);

        if($update){
            toastr()->success('Cadastro Atualizado com Sucesso','Sucesso');
            return redirect()->route('sys.manutencoes.index');
        }
        toastr()->error('Erro ao Atualizar Cadastro','Erro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Recupera o item pelo id
        $manutencao = Manutencao::find($id);
        $delete = $manutencao->delete();

        if($delete){
            toastr()->success('Registro Excluído com Sucesso','Sucesso');
            return '1';
        }else{
            toastr()->error('Erro ao Excluir Registro','Erro');
            return 2;
        }
    }
}
