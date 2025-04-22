@extends('layout')
@section('content')

<form action="{{route('petshop.store')}}" method="POST">
@csrf
<legend>Adicionar Animal</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Informe o ID do Tutor</label>
    <input type="text" id="disableTextInput" name="tutor_id" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tutor</label>
    <input type="text" id="disableTextInput" name="Tutor" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Nome do animal</label>
    <input type="text" id="disableTextInput" name="Nome" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo animal</label>
    <input type="text" id="disableTextInput" name="Tipo animal" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo atendimento</label>
    <input type="text" id="disableTextInput" name="Tipo atendimento" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Data atendimento</label>
    <input type="text" id="disableTextInput" name="Data atendimento" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Preço</label>
    <input type="text" id="disableTextInput" name="Preco" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Salvar</button>

</div>
</form>
@endsection