@extends('layouts.default')

@section('title', 'Alterar Funcionário')

@section('conteudo')
<div class="container-fluid shadow bg-white p-4">
    <h1 class="mb-5">Alterar Funcionários</h1>
    <form class="row g-4" method="post" action="{{ route('funcionarios.update', $funcionario->id) }}" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input type="hidden" value='1' name="id_user">
    <div class="row">
        <div class="col-4 mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" value="{{ $funcionario->nome }}" class="form-control form-control-lg bg-light" value="" required>
        </div>
    
        <div class="col-4 mb-3">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nasc" value="{{ $funcionario->data_nasc }}" class="form-control form-control-lg bg-light" value="" required>
        </div>
    
        <div class="col-4 mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select name="sexo" class="form-select form-control form-control-lg bg-light" value="" required>
                <option value=""></option>
                <option value="f" @selected($funcionario->sexo)>Feminino</option>
                <option value="m" @selected($funcionario->sexo)>Masculino</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-4 mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" value="{{ $funcionario->cpf }}" class="form-control form-control-lg bg-light" value="" required>
        </div>
    
        <div class="col-4 mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" value="{{ $funcionario->email }}"  class="form-control form-control-lg bg-light" value="" required>
        </div>
    
        <div class="col-4 mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" name="telefone" placeholder="(DDD)XXXXX-XXXX" value="{{ $funcionario->telefone }}"  class="form-control form-control-lg bg-light" value="" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="id_departamento" class="form-label">Departamento</label>
            <select id='id_departamento' name="id_departamento" class="form-select form-select-lg bg-light" value="" required>
                <option value="">--</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}" @selected($departamento->id == $funcionario->id_departamento)>{{ $departamento->nome }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="col-md-4">
            <label for="id_cargo" class="form-label">Cargo</label>
            <select type="text" name="id_cargo" class="form-select form-control form-control-lg bg-light" value="" required>
            <option value="">--</option>
                @foreach ($cargos as $cargo)
                    <option value="{{ $cargo->id }}" @selected($cargo->id == $funcionario->id_cargo)>{{ $cargo->descricao }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="col-4 mb-3">
            <label for="salario" class="form-label">Salário</label>
            <input type="text" name="salario" value="{{ $funcionario->salario }}"  placeholder="R$" class="form-control form-control-lg bg-light" value="" required>
        </div>
        <div class="col-md-2">
            <img src="/storage/funcionarios/{{ $funcionario->foto }}" class="img-thumbnail" alt="{{ $funcionario->nome }}">
        </div>
    </div>
    <div class="col-md-10">
       <label for="foto" class="form-label fs-5">Foto</label>
       <input type="file" name="foto" class="form-control form-control-lg bg-light" id="foto">
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
    <a href="{{  route('funcionarios.index')  }}" class="btn btn-danger btn-lg">Cancelar</a>
    </div>
    </form>
@endsection