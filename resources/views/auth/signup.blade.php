@extends('templates.master')

@section('title')

    | Auth

@endsection

@section('content')

    <h3>Sign Up</h3>
    <div class ="row">
        <div class="col-lg-6">
            <form class="form-vertical" role="form" method="post" action=" {{ route('auth.signup') }}">

                <!-- EMAIL -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class ="control-label">Your E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail address" value="{{ Request::old('email') ?:''}}">
                    @if ($errors->has('email'))
                        <span class="helper-block">{{$errors->first('email')}}</span>

                    @endif
                </div>

                <!-- NAME -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class ="control-label">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ Request::old('name') ?:''}}">
                    @if ($errors->has('name'))
                        <span class="helper-block">{{$errors->first('name')}}</span>

                    @endif
                </div>

                <!-- PASSWORD -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class ="control-label">Choose password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="">
                    @if ($errors->has('password'))
                        <span class="helper-block">{{$errors->first('password')}}</span>

                    @endif
                </div>

                <!-- CONFIRM PASSWORD -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password_confirmation" class ="control-label">Confirm password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" value="">
                    @if ($errors->has('password'))
                        <span class="helper-block">{{$errors->first('password')}}</span>

                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign Up</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}" >
            </form>
        </div>
    </div>
@endsection