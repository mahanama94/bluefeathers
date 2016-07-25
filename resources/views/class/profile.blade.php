@extends('templates.master')

@section('title')

    | Classes

@endsection

@section('content')

    @include('banners.default', ['caption' => 'Classes'])
    Class Content

    <div class="classes_wrapper">

        @include('class.partials.classblock')


    </div>

@endsection