@extends('layouts.default')

@section('title', 'Departamento')

@section('conteudo')
    <h1 class="mb-4">Departamentos</h1>
    <a href="{{route('departamentos.create')}}" class="btn btn-primary position-absolute top-0 end-0 m-4  rounded-circle fs-4"><i class="bi bi-plus"></i></a>
   
    <p>Total de departamentos: {{ $totalDepartamentos }}</p>

    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaDepartamento" class="form-control form-control-lg" placeholder="Nome do departamento">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="{{ route('departamentos.index') }}" class="btn btn-light border btn-lg">Limpar</a>
     </form>
    
     <div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th width = '190'>Ação</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
            <tr class="text-center">
                <td class="align-middle">{{ $departamento->id }}</td>
                <td class="align-middle">{{ $departamento->nome }}</td>
                <td><button type="button" class="btn btn-success m-2"><i class="bi bi-person"></i></button>
                    <button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button>
                    <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection