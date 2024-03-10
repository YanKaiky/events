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
                            <td scope="row">{{ count($event->users) }}</td>
                            <td><a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon
                                        name="create-outline"></ion-icon>
                                    Edit</a></td>
                            <td>
                                <form action="/events/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-outline"></ion-icon> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You no have events yet. <a href="/events/create">Create Event</a></p>
        @endif
    </div>

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Events I participate in</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($eventsAsParticipant) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Name</th>
                        <th scope="col">Participants</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($eventsAsParticipant as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td scope="row">{{ count($event->users) }}</td>
                            <td>
                                <form action="/events/leave/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-outline"></ion-icon> Leave event
                                    </button>
                                </form>    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You are not participating in any events yet. <a href="/">See all</a></p>
        @endif
    </div>
@endsection
