@extends('templates.master')

@section('title')
    | About
@endsection


@section('content')

    @include('banners.default', ['caption' => 'About'])
    About content

@endsection