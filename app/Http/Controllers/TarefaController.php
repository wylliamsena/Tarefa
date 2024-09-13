<?php

namespace App\Http\Controllers;

use App\Service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller

{
    protected $tarefaService;

    public function __construct(TarefaService $tarefaService)
    {
        $this->tarefaService = $tarefaService; 

    }

    public function store(Request $request)
    {
       $dados = $this->tarefaService->create($request->all());

        return response()->json($dados);
    }
    
    public function findById($id){
        
        $result = $this->tarefaService->findById($id);
        
        return response()->json($result);
    }

    public function index()
    {
        $tarefas = $this->tarefaService->getAll();

        return response()->json($tarefas);
    }


}
