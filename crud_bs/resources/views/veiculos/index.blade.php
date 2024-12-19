@extends('layouts.app')

@section('content')
<div class="card">
        <div class="d-flex justify-content-start mb-4">
    <a href="{{ route('veiculos.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Adicionar Veículo
    </a>
</div>

<h3 class="mb-3">Lista de Veículos</h3>



    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->id }}</td>
                        <td>{{ $veiculo->nome }}</td>
                        <td>{{ $veiculo->marca }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->ano }}</td>
                        <td>
                            <a href="{{ route('veiculos.show', $veiculo->id) }}" class="btn btn-sm btn-info">
                                <i class="bi bi-eye"></i> Visualizar
                            </a>
                            <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="btn btn-sm btn-success">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                                    <i class="bi bi-trash"></i> Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
