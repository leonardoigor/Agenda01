<?php

namespace App\Http\Controllers;
use App\Telefone;
use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    private $telefones_controller;
    private $pessoas;

    public function __construct(TelefoneController  $telefones_controller){
        $this->telefones_controller = $telefones_controller;
        $this->pessoas = new Pessoa();
    }

    public function index(){
        $list_pessoas = Pessoa::all();
        return view('pessoas.index',[
            'pessoas' => $list_pessoas,
        ]);
    }

    public function novoView(){
        return view('pessoas.create');
    }

    public function store(Request $request){
       $pessoa = Pessoa::create($request->all());
       if($request->ddd && $request->telefone){
           $telefone= new Telefone();
           $telefone->ddd = $request->ddd;
           $telefone->telefone = $request->telefone;
           $telefone->pessoa_id=$pessoa->id;
           $this->telefones_controller->store($telefone);
       }
    return \redirect("/pessoas")->with("message","Pessoa criada com sucesso");
    }

    protected function getPessoa($id){
        return $this->pessoas->find($id);
    }
    public function editarView($id){
        return \view('pessoas.edit',[
            'pessoa'=>$this->getPessoa($id)
        ]);
    }

    
    public function update(Request $req){
        $pessoa = $this->getPessoa($req->id);
        $pessoa->update($req->all());
        return redirect('/pessoas');
    }
    
    public function excluirView(Request $req){
        return view('pessoas.delete',[
            'pessoas'=>$this->getPessoa($req->id)
        ]);
    }
}