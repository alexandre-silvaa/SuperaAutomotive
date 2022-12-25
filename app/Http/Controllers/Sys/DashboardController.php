<?php

namespace App\Http\Controllers\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Carro;
use App\Models\Manutencao;
use DateTime;

class DashboardController extends Controller
{
    protected $request;
    protected $manutencao;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = Auth::user();

        //recupera os carros vinculados ao usuário logado
        $meusCarros = Carro::where('user_id',$user->id)->get();
        $qtdCarros = Carro::where('user_id',$user->id)->count();

        /* ************************** Próximas manutenções (7dias) ************************** */
        $minhasManutencoes = Manutencao::where('user_id',$user->id)->get();

        $hoje = new DateTime();
        $qtdManutencoes = 0;

        foreach($minhasManutencoes as $manutencoes){

            $dataManutencao = new DateTime($manutencoes->data);
            $result = $hoje->diff($dataManutencao);
            $diferenca = $result->days;
            $feita = $manutencoes->realizada;
            
            if($diferenca <= 0 || $diferenca <= 7 && $feita != 1){
                $proximas[] = $manutencoes;
                $qtdManutencoes++;
            }
        }

        if(empty($proximas)){
                $proximas = array();
        };

        /* ************************** Manutenções realizadas ************************** */
        
        $qtdRealizadas = 0;

        foreach($minhasManutencoes as $manuten){
            $realizada = $manuten->realizada;
            
            if($realizada == 1){
                $realizadas[] = $manuten;
                $qtdRealizadas++;
            }
        }

        if(empty($realizadas)){
                $realizadas = array();
        };

        return view('sys.dashboard.index',compact('meusCarros','qtdCarros','proximas','qtdManutencoes','realizadas','qtdRealizadas'));
    }
}
