@extends('templates.master')

@section('title')

    | Trainers

@endsection

@section('content')

    @include('banners.default',['caption' =>'Trainers'])

    Trainer content

    <br>

    <a href="{{ route('trainers.new') }}">Add new trainer</a>
    <div class="container">
        <div class="about_trainer">
            <h3 class="m_2">Our Trainers</h3>
                @foreach($trainers as$trainer)
                    @include('trainer.partials.trainerblock')
                @endforeach
        </div>
    </div>

@endsection