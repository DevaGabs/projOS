@extends('layouts.main')
@section('title', 'Editando:' . $ordens->title)  
@section('content')   
     <div id="ordens-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{$ordens->title}} </h1>
        <form action="/ordens/update/{{$ordens->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="form-group">
            <label for="Title">Titulo:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome da O.S" value="{{$ordens->title}}">
           </div>
           <div class="form-group">
            <label for="Title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do serviço">
           </div>
           <div class="form-group">
            <label for="Title">A O.S é privada?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{$ordens->private == 1 ? "selected='selected'" : ""}}>Sim</option>
            </select>
            <div class="form-group">
                <label for="Title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição da O.S"></textarea>
               </div>
            <input type="submit" class="btn btn-primary" value="Editar O.S">   
           </div>
        </form>
     </div>
        
@endsection