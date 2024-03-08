@extends('layouts.main')

@section('title', 'YK Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Search a event</h1>

        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Next events</h2>

        <p class="subtitle">Look next events</p>

        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">

                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-">{{ $event->title }}</h5>

                        <p class="card-participants">30 participants</p>

                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Get info</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0)
                <p>No have events yet</p>
            @endif
        </div>
    </div>
@endsection
