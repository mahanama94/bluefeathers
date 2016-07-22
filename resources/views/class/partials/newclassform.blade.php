<div class="col-lg-6">
    <form class="form-vertical" role="form" method="post" action="{{ route('classes.new') }}">

        <!-- NAME -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class ="control-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Class Name" value="{{ Request::old('name') ?:''}}">
            @if ($errors->has('name'))
                <span class="helper-block">{{$errors->first('name')}}</span>
            @endif
        </div>

        <!-- TRAINER NAME -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class ="control-label">Trainer</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="E-mail address" value="{{ Request::old('email') ?:''}}">
            @if ($errors->has('email'))
                <span class="helper-block">{{$errors->first('email')}}</span>

            @endif
        </div>

        <!-- Number of openings -->
        <div class="form-group{{ $errors->has('openings') ? ' has-error' : '' }}">
            <label for="openings" class ="control-label">Number of Openings </label>
            <input type="number" name="openings" class="form-control" id="openings" placeholder="Number of students" value="{{ Request::old('openings') ?:''}}">
            @if ($errors->has('qualifications'))
                <span class="helper-block">{{$errors->first('openingss')}}</span>

            @endif
        </div>

        <!-- DESCRIPTION -->
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class ="control-label">Description </label>
            <input type="text" name="description" class="form-control" id="name" placeholder="Description" value="{{ Request::old('description') ?:''}}">
            @if ($errors->has('description'))
                <span class="helper-block">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Add</button>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}" >

    </form>
</div>
