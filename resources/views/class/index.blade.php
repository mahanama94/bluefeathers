@extends('templates.master')

@section('title')

    | Classes

@endsection

@section('content')

    @include('banners.default', ['caption' => 'Classes'])
    Class Content

    <div class="classes_wrapper">

        @foreach($classes as $class)
            @include('class.partials.classblock')
        @endforeach

    </div>

    <br>

    <a href="{{ route('classes.new') }}">Create a new class</a>

@endsection