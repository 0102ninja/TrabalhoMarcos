@extends('layout')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id Tutor</th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo animal</th>
        <th scope="col">Tipo atendimento</th>
        <th scope="col">Preco</th>
        <th scope="col">Data atendimento</th>
        <th scope="col">Tutor</th>
        <th scope="col">Editar</th>
        <th scope="col">Mostrar</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach($animais_tb as $animal)
      <tr>
        
        <th scope="row">{{$animal->id}}</th>
        <td>{{$animal->tutor_id}}</td>
        <td>{{$animal->Nome}}</td>
        <td>{{$animal->Tipo_animal}}</td>
        <td>{{$animal->Tipo_atendimento}}</td>
        <td>{{$animal->Preco}}</td>
        <td>{{$animal->Data_atendimento}}</td>
        <td>{{$animal->Tutor}}</td>
        <td><a href={{route('petshop.edit',['animal'=>$animal])}}> <button type="button" class="btn btn-success" hres >Editar</button></td>
        <td><a href={{route('petshop.show',['animal'=>$animal])}}> <button type="button" class="btn btn-warning" hres >Mostrar</button></td>
       
 
      </tr>
      @endforeach
     
    </tbody>
  </table>
@endsection