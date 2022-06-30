@extends('principal')
@section('conteudo')

<div class="row mb-2">
<div class=" p-2">
    <form class="form-group" name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('cadastrar')}}">   
        @csrf
        <div class="form-group">
        <label for="cpf">CPF</label>
        <input class="form-control" type="text" name="cpf" id="cpf" maxlength="11">
        </div>
        <div class="form-group">
        <label for="nome">NOME</label>
        <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="form-group">
        <label for="dtini">Data Inicial</label>
        <input class="form-control" type="date" name="dtini" id="dtini">
        </div>
        <div class="form-group">
        <label for="dtfim">Data Final</label>
        <input class="form-control" type="date" name="dtfim" id="dtfim">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>

</div>
</div>
@stop