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
                    @include('trainer.partials.trainerblock')
                </div>

        </div>

    </div>
    Trainer content

    <br>

    <a href="{{ route('trainers.new') }}">Add new trainer</a>

@endsection