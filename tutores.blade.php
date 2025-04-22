@extends('layoutTutores')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        <th scope="col">Editar</th>
        <th scope="col">Mostrar</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach($tutor_tb as $tutores)
      <tr>
        
        <th scope="row">{{$tutores->id}}</th>
        <td>{{$tutores->Nome}}</td>
        <td>{{$tutores->Idade}}</td>
        <td>{{$tutores->Telefone}}</td>
        <td>{{$tutores->Email}}</td>
        <td><a href={{route('tutores.edit',['tutor'=>$tutores])}}> <button type="button" class="btn btn-success" hres >Editar</button></td>
        <td><a href={{route('tutores.show',['tutor'=>$tutores])}}> <button type="button" class="btn btn-warning" hres >Mostrar</button></td>

 
      </tr>
      @endforeach
     
    </tbody>
  </table>
@endsection