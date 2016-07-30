@extends('templates.master')

@section('title')

    | Trainers

@endsection

@section('content')


    <div class="container">
        <div class="about_trainer">
            <h3 class="m_2">Trainers - {{ $trainer->getName() }}</h3>
            <div class="row about_box">
                <div class="col-md-3"></div>
                @include('trainer.partials.newtrainerform')
            </div>

        </div>
    </div>

    <div class="container">
        <h3 class="m_2">Classes by - {{ $trainer->getName() }}</h3>
        <div class="row about_box">
            @foreach($trainer->getClasses() as $class)
                <div class="col-md-3"></div>
                @include('class.partials.classblock')
            @endforeach
        </div>

    </div>
    Trainer content

    <br>

    <a href="{{ route('trainers.new') }}">Add new trainer</a>

@endsection