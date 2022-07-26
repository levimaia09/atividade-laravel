@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="pin"></ion-icon>{{$event->city}}</p>
                <p class="events-participants"><ion-icon name="contact"></ion-icon> X participantes </p>
                <p class="event-owner"><ion-icon name="star"></ion-icon> Dono do evento </p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play"></ion-icon><span>{{$item}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento</h3>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>

@endsection