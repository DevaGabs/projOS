@extends('layouts.main')
@section('title', 'Sistema E.O.S')  
@section('content')   
     <div id="search-container" class="col-md-12" >
        <h1>Busque uma Ordem de Serviço</h1>  
          <form action="/" method="GET">
            <input type="text" id="search" class="form-control" placeholder="procurar...">
          </form>
     </div>
     <div class="row">
        @if ($search)
            <h1>Buscando por: {{$search}} </h1>
            @else
            <h1>Ultimas O.S cadastradas</h1>
        @endif
        <p>vejam as ultimas O.S cadastradas</p>
        @foreach ($ordens as $ordem )
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$ordem ->title}}</h5>
              <p class="card-text">{{$ordem ->description}}</p>
              <a href="/ordens/{{$ordem->id}}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        @endforeach 
      </div> 
@endsection