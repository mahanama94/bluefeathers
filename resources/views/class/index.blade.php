@extends('templates.master')

@section('title')

    | Classes

@endsection

@section('content')

    @include('banners.default', ['caption' => 'Classes'])
    Class Content

    <div class="classes_wrapper">

        @foreach($classes as $class)
            @include('class.partials.classblock', ['editable' => Auth::check()])
        @endforeach

    </div>

    <br>

    @if(Auth::check())

        <a href="{{ route('classes.new') }}">Create a new class</a>

    @endif
@endsection