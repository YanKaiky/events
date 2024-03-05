@extends('layouts.main')
@section('title', 'Product')
@section('content')

    @if ($id)
        <p>Show Product ID {{ $id }}</p>
    @endif

@endsection
