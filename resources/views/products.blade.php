@extends('layouts.main')
@section('title', 'Products')
@section('content')
    @if ($search)
        <p>Search {{ $search }}</p>
    @endif

    <h1>Products screen</h1>
@endsection
