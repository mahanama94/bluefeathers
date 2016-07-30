@extends('templates.master')

@section('title')

    | Trainers

@endsection

@section('content')
    <h3>Sign Up</h3>
    <div class ="row">
    </div>

@section('content')
    <h3>Add new Trainer</h3>
    <div class ="row">

            @include('trainer.partials.newtrainerform')

        @foreach($trainers as $trainer)
            @include('trainer.partials.trainerblock')
        @endforeach

    </div>
@endsection


@endsection
