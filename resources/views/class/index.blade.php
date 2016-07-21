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

@endsection