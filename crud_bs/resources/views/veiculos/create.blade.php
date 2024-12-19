@extends('layouts.app')

@section('title', 'Adicionar Veículo')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5>Adicionar Novo Veículo</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('veiculos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do veículo" required>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Digite a marca do veículo" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Digite o modelo do veículo" required>
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" id="ano" class="form-control" placeholder="Digite o ano do veículo" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Salvar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection