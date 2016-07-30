@extends('templates.master')

@section('title')

    | Auth

@endsection

@section('content')

    <h3>Log In</h3>
    <div class ="row">
        <div class="col-lg-6">
            <form class="form-vertical" role="form" method="post" action=" {{ route('auth.login') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class ="control-label">Your User Name</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail" value="{{ Request::old('email') ?:''}}">
                    @if ($errors->has('uemail'))
                        <span class="helper-block">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class ="control-label">Your Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="">
                    @if ($errors->has('username'))
                        <span class="helper-block">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Log In</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}" >
            </form>
        </div>
    </div>

@endsection