@extends('layout')
@section('content')

<form  action="{{route('tutores.update', ['tutor'=>$tutor->id])}}" method="POST">
@csrf
@method('PUT')
<legend>Editar Tutor</legend>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Nome do Tutor</label>
    <input type="text" id="disableTextInput" name="Nome" class="form-control" value="{{$tutor->Nome}}">
</div> 
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Idade</label>
    <input type="text" id="disableTextInput" name="Idade" class="form-control" value="{{$tutor->Idade}}">
</div>  
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Telefone</label>
    <input type="text" id="disableTextInput" name="Telefone" class="form-control"value="{{$tutor->Telefone}}">
</div>
<div class="mb-3">
    <label for="disableTextInput" class="form-label">Email</label>
    <input type="text" id="disableTextInput" name="Email" class="form-control"value="{{$tutor->Email}}">
</div>

<button type="submit" class="btn btn-primary">Salvar</button>

</div>
</form>
@endsection