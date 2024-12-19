<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    // Exibe todos os veículos
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    // Exibe o formulário para criar um novo veículo
    public function create()
    {
        return view('veiculos.create');
    }

    // Armazena um novo veículo no banco de dados
    public function store(Request $request)
    {
        Veiculo::create($request->all());
        return redirect()->route('veiculos.index');
    }

    // Exibe os detalhes de um veículo específico
    public function show($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.show', compact('veiculo'));
    }

    // Exibe o formulário de edição para um veículo específico
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    // Atualiza os dados de um veículo no banco de dados
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($request->all());
        return redirect()->route('veiculos.index');
    }

    // Deleta um veículo do banco de dados
    public function destroy($id)
    {
        Veiculo::findOrFail($id)->delete();
        return redirect()->route('veiculos.index');
    }
}