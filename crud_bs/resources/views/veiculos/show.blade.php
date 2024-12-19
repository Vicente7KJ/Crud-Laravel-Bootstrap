@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-start mb-4">
        <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <h3>Detalhes do Veículo</h3>

    <div class="card">
        <div class="card-body">
            <p><strong>Nome:</strong> {{ $veiculo->nome }}</p>
            <p><strong>Marca:</strong> {{ $veiculo->marca }}</p>
            <p><strong>Modelo:</strong> {{ $veiculo->modelo }}</p>
            <p><strong>Ano:</strong> {{ $veiculo->ano }}</p>
        </div>
    </div>
</div>
@endsection
