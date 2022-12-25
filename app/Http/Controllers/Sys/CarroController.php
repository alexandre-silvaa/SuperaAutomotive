<?php

namespace App\Http\Controllers\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CarroRequest;   
use App\Models\Carro;
use App\Models\User;
use Auth;

class CarroController extends Controller
{
    protected $request;
    protected $carro;
    protected $paginacao = 25;

    public function __construct(Request $request, Carro $carro)
    {
        $this->request = $request;      
        $this->carro  = $carro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $carros = Carro::orderBy('nome')->where('user_id',$user->id)->paginate($this->paginacao);
        return view('sys.carro.index', compact('carros'));          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('sys.carro.create', compact('user')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarroRequest $request)
    {
        $data = $request->all();
        //dd($data);
        $insert = Carro::create($data);
        
        if($insert){
            toastr()->success('Cadastro Realizado com Sucesso','Sucesso');
            return redirect()->route('sys.carros.index');
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
        $carro = Carro::with(['user'])->find($id);
        return view('sys.carro.show', compact('carro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$carro = Carro::find($id) )
            return redirect()->back();

        $user = Auth::user();

        return view('sys.carro.edit', compact('carro','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarroRequest $request, $id)
    {
        if( !$carro = Carro::find($id) )
            return redirect()->back();

        $data = $request->all();
        
        $update = $carro->update($data);

        if($update){
            toastr()->success('Cadastro Atualizado com Sucesso','Sucesso');
            return redirect()->route('sys.carros.index');
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
        $carro = Carro::find($id);
        $delete = $carro->delete();

        if($delete){
            toastr()->success('Registro Excluído com Sucesso','Sucesso');
            return '1';
        }else{
            toastr()->error('Erro ao Excluir Registro','Erro');
            return 2;
        }
    }
}
