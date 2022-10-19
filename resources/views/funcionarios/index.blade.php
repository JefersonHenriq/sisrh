@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')
    <h1>Funcionário</h1>
    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr class="text-center">
                <td class="align-middle">{{ $funcionario->id }}</td>
                <td class="align-middle"><img src="/images/funcionarios/{{ $funcionario->foto }}" alt="{{ $funcionario->nome }}" width="100"></td>
                <td class="align-middle">{{ $funcionario->departamento->nome }}</td>
                <td class="align-middle">{{ $funcionario->nome }}</td>
                <td class="align-middle">{{ $funcionario->cargo->descricao }}</td>
                <td><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection