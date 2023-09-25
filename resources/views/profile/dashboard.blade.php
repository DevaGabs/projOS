@extends('layouts.main')
@section('title', 'Dashboard')  
@section('content')   
     <div class="col-md-10 offset-md-1 Dashboard-title-container ">
        <h1>Minhas O.S's</h1>
     </div>
     <div class="col-md-10 offset-md-1 Dashboard-ordens-container ">
        @if (count($ordens)>0)
        
        @else
            <p>Você ainda não tem ordens de serviço cadastradas!,<a href="/ordens/create">Criar O.S</a></p>
        @endif
     </div>
        
@endsection