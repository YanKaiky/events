@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>My events</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
            
        @else
            <p>You no have events yet. <a href="/events/create">Create Event</a></p>
        @endif
    </div>
@endsection
