@extends('templates.master')

@section('title')

    | Trainers

@endsection

@section('content')

    @include('banners.default',['caption' =>'Trainers'])

    <div class="container">
        <div class="about_trainer">
            <h3 class="m_2">Our Trainers</h3>
                @foreach($trainers as$trainer)
                    <div class="row about_box">
                        <div class="col-md-3"></div>
                        @include('trainer.partials.trainerblock')
                    </div>
                @endforeach
        </div>
    </div>


    Trainer content

    <br>
    @if(Auth::check())

        <a href="{{ route('trainers.new') }}">Add new trainer</a>

    @endif

@endsection