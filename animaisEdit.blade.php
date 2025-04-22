@extends('layout')
@section('content')

<form  action="{{route('petshop.update', ['animal'=>$animal->id])}}" method="POST">
@csrf
@method('PUT')
<legend>Editar Animal</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo animal</label>
    <input type="text" id="disableTextInput" name="Tipo_animal" class="form-control" value="{{$animal->Tipo_animal}}">
</div>  
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tipo atendimento</label>
    <input type="text" id="disableTextInput" name="Tipo_atendimento" class="form-control"value="{{$animal->Tipo_atendimento}}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Preço</label>
    <input type="text" id="disableTextInput" name="Preco" class="form-control"value="{{$animal->Preco}}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Data atendimento</label>
    <input type="text" id="disableTextInput" name="Data_atendimento" class="form-control"value="{{$animal->Data_atendimento}}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Tutor</label>
    <input type="text" id="disableTextInput" name="Tutor" class="form-control"value="{{$animal->Tutor}}">
</div>

<button type="submit" class="btn btn-primary">Salvar</button>

</div>
</form>
@endsection