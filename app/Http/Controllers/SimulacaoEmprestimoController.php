<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SimulacaoEmprestimoFormRequest;

class SimulacaoEmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function simular(SimulacaoEmprestimoFormRequest $request)
    {
        $parcela_coeficiente = explode('|',$request->input('parcela'));
        $simulacao_emprestimo = $request->input('valor_emprestimo') * $parcela_coeficiente[1];
       
        $result = array('instituicao' => $request->input('instituicao'),'convenio' => $request->input('convenio'),
                        'taxa' => $parcela_coeficiente[2], 'valor' => $simulacao_emprestimo);
        
        //$result = json_encode($result);
        //print_r($result);exit;
        
        return view('simulacao_emprestimo',compact('result'));
    }
}
