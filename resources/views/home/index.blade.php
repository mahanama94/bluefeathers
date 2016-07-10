@extends('templates.master')

@section('title')
    | Home
@endsection

@section('content')

    @include('banners.welcome')

    Home content

    @include('maps.default')

@endsection