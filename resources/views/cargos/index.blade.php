@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')
    <h1 class="mb-4">Cargos</h1>
    <a href="{{ route('cargos.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    
    <p>Total de cargos: {{ $totalCargos }}</p>

    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaCargo" class="form-control form-control-lg" placeholder="Descrição do cargo">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="{{ route('cargos.index') }}" class="btn btn-light border btn-lg">Limpar</a>
     </form>
    
     <div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Descrição</th>
                <th width = '190'>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
            <tr class="text-center">
                <td class="align-middle">{{ $cargo->id }}</td>
                <td class="align-middle">{{ $cargo->descricao }}</td>
                <td><button type="button" class="btn btn-success m-2"><i class="bi bi-person"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection