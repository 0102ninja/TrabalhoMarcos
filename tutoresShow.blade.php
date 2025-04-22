@extends('layout')
@section('content')

<form action="{{route('tutores.destroy',['tutor'=>$tutor->id])}}" method="POST">
@csrf
@method('DELETE')
<legend>Excluir Tutor</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Nome do Tutor</label>
    <input type="text" id="disableTextInput" name="Nome" class="form-control" placeholder="{{ $tutor->Nome }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Idade</label>
    <input type="text" id="disableTextInput" name="Idade" class="form-control" placeholder="{{ $tutor->Idade }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Telefone</label>
    <input type="text" id="disableTextInput" name="Telefone" class="form-control" placeholder="{{ $tutor->Telefone }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Email</label>
    <input type="text" id="disableTextInput" name="Email" class="form-control"placeholder="{{ $tutor->Email}}">

<a href="{{route('petshop.index')}}"><button type="button" class="btn btn-primary">Voltar</button></a>
        <button type="submit" class="btn btn-danger">Excluir</button>


</div>
</form>
@endsection