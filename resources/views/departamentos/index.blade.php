@extends('layouts.default')

@section('title', 'Departamento')

@section('conteudo')
    <h1>Departamentos</h1>
    <a href="{{route('departamentos.create')}}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
            <tr class="text-center">
                <td class="align-middle">{{ $departamento->id }}</td>
                <td class="align-middle">{{ $departamento->nome }}</td>
                <td><button type="button" class="btn btn-success m-2"><i class="bi bi-person"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection