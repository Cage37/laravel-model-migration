@extends('layout.app')


<div class="title">
    <h1>HOLIDAYS - SICILIA</h1>
</div>


<div class="maincont">
    @foreach($holidays as $holiday) 
    <div class="card">
        <div class="divcont"> <p class="info">Date of departure:</p> <p class="object">{{ $holiday->date_of_departure }}</p></div>
        <div class="divcont"> <p class="info">Destination:</p> <p class="object">{{ $holiday->destination }}</p></div>
        <div class="divcont"> <p class="info">Travel:</p> <p class="object">{{ $holiday->travel }}</p></div>
        <div class="divcont"><p class="info">Price:</p> <p class="object">{{ $holiday->price }} €</p></div>
    </div>
    @endforeach
</div>