@extends('layouts.app2')

@section('content')


<div class="container">
<p><a class="btn btn-primary" href="{{route('admin.adicionar')}}" role="button">Adicionar Usuário</a></p>
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lista de Usuários</li>
        </ol>
      </nav>
<div class="container">
<div class="row">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome </th>
            <th scope="col">Email</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
          <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>
                <a class="btn btn-info" href="{{route('admin.usuarios.editar',$usuario->id)}}" role="button">Editar</a>
                <a class="btn btn-danger" href="{{route('admin.usuarios.deletar',$usuario->id)}}" role="button">Deletar</a>
                </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>
</div>
@endsection
