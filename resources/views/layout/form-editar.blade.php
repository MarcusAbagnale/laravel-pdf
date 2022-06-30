@extends('principal')
@section('conteudo')

<div class="row mb-2">
<div class=" p-2">
    <form class="form-group" name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('editar')}}">   
        @csrf
        <div class="form-group">
        <label for="cpf">CPF</label>
        <input class="form-control bg-light" type="text" name="cpf" id="cpf" maxlength="11" value="{{ $dadosCadastrados[0]->cpf }}">
        </div>
        <div class="form-group">
        <label for="nome">NOME</label>
        <input class="form-control bg-light" type="text" name="nome" id="nome" value="{{ $dadosCadastrados[0]->nome }}">
        </div>
        <div class="form-group">
        <label for="dtini">Data Inicial</label>
        
        <input class="form-control bg-light" type="date" name="dtini" id="dtini" value="{{ $dadosCadastrados[0]->dtini }}">
        
        </div>
        <div class="form-group">
        <label for="dtfim">Data Final</label>
        <input class="form-control bg-light" type="date" name="dtfim" id="dtfim" value="{{ $dadosCadastrados[0]->dtfim }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>

</div>
</div>
@stop 
        