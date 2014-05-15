@extends('layouts.default')

@section('content')

    @foreach($workouts as $workout)
        <p>{{ $workout }}</p>
    @endforeach
@stop
