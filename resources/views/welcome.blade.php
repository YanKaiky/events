@extends('layouts.main')
@section('title', 'YK Events')
@section('content')

<h1>Yan Kaiky</h1>
<img src="/img/bg.png" alt="Bg">
@if (10 < 5)
    <p>Is True</p>
@endif

<p>{{ $name }}</p>
<p>{{ $age }} years old</p>

@if ($name === 'Yan')
    <p>His name's {{ $name }} with {{ $age }} years old and he does {{ $job }}</p>
@elseif ($name == 'Kaiky')
    <p>His name's {{ $name }} with {{ $age }} years old and he does {{ $job }}</p>
@else
    <p>His name isn't {{ $name }}</p>
@endif

@for ($i = 0; $i < count($array); $i++)
    <p>{{ $array["$i"] }} - {{ $i }}</p>
    @if ($i === 2)
        <p>Repete o {{ $array["$i"] }}</p>
    @endif
@endfor

@foreach ($names as $name)
    <p>{{ $loop->index }} - {{ $name }}</p>
@endforeach

{{-- Comments --}}

@endsection