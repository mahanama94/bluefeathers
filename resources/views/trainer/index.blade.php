@extends('templates.master')

@section('title')

    | Trainers

@endsection

@section('content')

    @include('banners.default',['caption' =>'Trainers'])

    Trainer content

    <br>

    <a href="{{ route('trainers.new') }}">Add new trainer</a>
    <?php echo var_dump($trainers[0]) ?>


@endsection