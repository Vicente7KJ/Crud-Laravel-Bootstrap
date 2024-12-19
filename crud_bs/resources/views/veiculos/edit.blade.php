@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-start mb-4">
        <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <h3 class="mb-3">Editar Veículo</h3>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{ $veiculo->nome }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" name="marca" class="form-control" value="{{ $veiculo->marca }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" name="modelo" class="form-control" value="{{ $veiculo->modelo }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ano" class="form-label">Ano</label>
                        <input type="number" name="ano" class="form-control" value="{{ $veiculo->ano }}" required>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-2">
                        <i class="bi bi-check-circle"></i> Salvar
                    </button>
                    <a href="{{ route('veiculos.index') }}" class="btn btn-danger">
                        <i class="bi bi-x-circle"></i> Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection