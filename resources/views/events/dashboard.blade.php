@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>My events</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Name</th>
                        <th scope="col">Participants</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td scope="row">30</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You no have events yet. <a href="/events/create">Create Event</a></p>
        @endif
    </div>
@endsection
