@extends('layout')
@section('content')

<form action="{{route('petshop.destroy',['animal'=>$animal->id])}}" method="POST">
@csrf
@method('DELETE')
<legend>Animal</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Informe o ID do Tutor</label>
    <input type="text" id="disableTextInput" name="Tipo_animal" class="form-control" placeholder="{{ $animal->Id_Tutor }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Nome</label>
    <input type="text" id="disableTextInput" name="Nome" class="form-control" placeholder="{{ $animal->Nome }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo animal</label>
    <input type="text" id="disableTextInput" name="Tipo_animal" class="form-control" placeholder="{{ $animal->Tipo_animal }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo atendimento</label>
    <input type="text" id="disableTextInput" name="Tipo_atendimento" class="form-control"placeholder="{{ $animal->Tipo_atendimento}}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Preço</label>
    <input type="text" id="disableTextInput" name="Preco" class="form-control"placeholder="{{ $animal->Preco }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Data atendimento</label>
    <input type="text" id="disableTextInput" name="Data_atendimento" class="form-control"placeholder="{{ $animal->Data_atendimento }}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tutor</label>
    <input type="text" id="disableTextInput" name="Tutor" class="form-control"placeholder="{{ $animal->Tutor }}">
</div>

<a href="{{route('petshop.index')}}"><button type="button" class="btn btn-primary">Voltar</button></a>
        <button type="submit" class="btn btn-danger">Excluir</button>


</div>
</form>
@endsection