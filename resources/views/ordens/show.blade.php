@extends('layouts.main')
@section('title', $ordens->title)  
@section('content')  
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
            <h1>{{$ordens ->title}}</h1>
            <p class="ordens-city"><ion-icon name="location-outline"></ion-icon>{{$ordens->city}}</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{$ordensOwnner['name']}} </p>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Descrição da O.S</h3>
            <p class="ordens-description"> {{$ordens->description}} </p>
        </div>
    </div>
</div>
@endsection