@extends('layouts.main')

@section('title', $event->title)

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>{{ $event->title }}</h1>

        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image:</label>

                <input type="file" class="form-control-file" id="image" name="image" placeholder="image">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div>

            <div class="form-group">
                <label for="title">Event:</label>

                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $event->title }}">
            </div>

            <div class="form-group">
                <label for="date">Date:</label>

                <input type="date" class="form-control" id="date" name="date" value="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="city">City:</label>

                <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ $event->city }}">
            </div>

            <div class="form-group">
                <label for="private">Private event?</label>

                <select name="private" id="private" class="form-control">
                    <option {{ $event->private == 1 ? "selected='selected'" : "" }} value="1">Yes</option>
                    <option {{ $event->private == 0 ? "selected='selected'" : "" }} value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>

                <textarea class="form-control" id="description" name="description" placeholder="Description...">{{ $event->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="items">Add Items:</label>

                <div class="form-group">
                    <input type="checkbox" name="items[]" id="Chairs" value="Chairs">Chairs</input>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" id="Snacks" value="Snacks">Snacks</input>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" id="Drinks" value="Drinks">Drinks</input>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" id="Lights" value="Lights">Lights</input>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" id="Stage" value="Stage">Stage</input>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" id="Screens" value="Screens">Screens</input>
                </div>
            </div>

            <input type="submit" value="Update event" class="btn btn-primary">
        </form>
    </div>
@endsection
