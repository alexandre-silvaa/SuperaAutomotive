<?php

namespace App\Http\Controllers\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    protected $request;
    protected $user;

    public function __construct(Request $request, User $user)
    {
        $this->request = $request;      
        $this->user  = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auth = Auth::user();
        if(!$user = User::find($auth->id))
            return redirect()->back();

        return view('sys.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auth = Auth::user();
        if(!$user = User::find($auth->id) )
            return redirect()->back();

        return view('sys.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $auth = Auth::user();
        if( !$user = User::find($auth->id) )
            return redirect()->back();

        $data = $request->all();

        if( $data['password'] != null )
            $data['password'] = Hash::make($request->password);
        else
            unset($data['password']);
        
        $update = $user->update($data);

        if($update){
            toastr()->success('Cadastro Atualizado com Sucesso','Sucesso');
            return redirect()->route('sys.users.show',$auth->id);
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
        return redirect()->back();
    }
}
