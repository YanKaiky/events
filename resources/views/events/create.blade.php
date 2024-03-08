@extends('layouts.main')

@section('title', 'Create Event')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create your event</h1>

        <form action="/events" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Event:</label>

                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="city">City:</label>

                <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div>

            <div class="form-group">
                <label for="private">Private event?</label>

                <select name="private" id="private" class="form-control">
                    <option value="1">Yes</option>
                    <option selected value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>

                <textarea class="form-control" id="description" name="description" placeholder="Description..."></textarea>
            </div>

            <input type="submit" value="Create event" class="btn btn-primary">
        </form>
    </div>
@endsection
