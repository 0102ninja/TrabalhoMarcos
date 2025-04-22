@extends('layoutTutores')
@section('content')

<form action="{{route('tutores.store')}}" method="POST">
@csrf
<legend>Adicionar Tutores</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Nome do Tutor</label>
    <input type="text" id="disableTextInput" name="Nome" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Idade</label>
    <input type="text" id="disableTextInput" name="Idade" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Telefone</label>
    <input type="text" id="disableTextInput" name="Telefone" class="form-control">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Email</label>
    <input type="text" id="disableTextInput" name="Email" class="form-control">

<button type="submit" class="btn btn-primary">Salvar</button>

</div>
</form>
@endsection