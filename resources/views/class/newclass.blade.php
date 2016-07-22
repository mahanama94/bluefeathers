@extends('templates.master')

@section('title')

    | Classes

@endsection

@section('content')
    <h3>Sign Up</h3>
    <div class ="row">
    </div>

@section('content')
    <h3>Add a new class</h3>
    <div class ="row">

        @include('class.partials.newclassform')

        @foreach($classes as $class)
            @include('class.partials.classblock')
        @endforeach

    </div>
@endsection


@endsection
