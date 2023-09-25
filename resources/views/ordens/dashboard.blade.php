@extends('layouts.main')
@section('title', 'Dashboard')  
@section('content')   
     <div class="col-md-10 offset-md-1 Dashboard-title-container ">
        <h1>Minhas O.S's</h1>
     </div>
     <div class="col-md-10 offset-md-1 Dashboard-ordens-container ">
        @if (count($ordens)>0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                    
                </tr>
            </thead>
        
            <tbody>
                @foreach ($ordens as $ordem)
                    <tr>
                        <td scope="row"> {{$loop->index + 1}} </td>
                        <td><a href="/ordens/{{$ordem->id}}"> {{$ordem ->title}} </a></td>
                        <td>
                            <a href="/ordens/edit/{{$ordem->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline" ></ion-icon> Editar</a>
                            <form action="/ordens/{{$ordem->id}}" method="POST">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon> Deletar </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
        @else
            <p>Você ainda não tem ordens de serviço cadastradas!,<a href="/ordens/create">Criar O.S</a></p>
        @endif
     </div>
        
@endsection