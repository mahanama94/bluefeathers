<div class="col-lg-6">
    <form class="form-vertical" role="form" method="post" action="{{ isset($trainer) ? route('trainer.postEdit') : route('trainers.new') }}" enctype="multipart/form-data">

        @if(isset($trainer))
            <div class="form-group">
                <label for="id" class="control-label">ID</label>
                <input type="text" name="id" class="form-control" id="id"
                       value="{{ Request::old('name') ?: isset($trainer) ? $trainer->getId() :''}}" disabled>
            </div>

        @endif

        <!-- NAME -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="control-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Trainer Name"
                   value="{{ Request::old('name') ?: isset($trainer) ? $trainer->getName() :''}}">
            @if ($errors->has('name'))
                <span class="helper-block">{{$errors->first('name')}}</span>

            @endif
        </div>

        <!-- EMAIL -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">E-mail</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="E-mail address"
                   value="{{ Request::old('email') ?: isset($trainer) ? $trainer->getEmail() :''}}">
            @if ($errors->has('email'))
                <span class="helper-block">{{$errors->first('email')}}</span>

            @endif
        </div>

        <!-- QUALIFICATIONS -->
        <div class="form-group{{ $errors->has('qualifications') ? ' has-error' : '' }}">
            <label for="name" class="control-label">Qualifications </label>
            <textarea name="qualifications" class="form-control" id="name" placeholder="Qualifications">
                @if((Request::old('qualifications')))
                    {{ Request::old('qualifications') }}
                @else
                    @if(isset($trainer))
                        {{ $trainer->getQualifications() }}
                    @else
                        {{ '' }}
                    @endif
                @endif

            </textarea>
            @if ($errors->has('qualifications'))
                <span class="helper-block">{{$errors->first('qualifications')}}</span>

            @endif
        </div>

        <!-- DESCRIPTION -->
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class="control-label">Description </label>
            <textarea name="description" class="form-control" id="name" placeholder="Description">
                @if((Request::old('qdescription')))
                    {{ Request::old('description') }}
                @else
                    @if(isset($trainer))
                        {{ $trainer->getDescription() }}
                    @else
                        {{ '' }}
                    @endif
                @endif
            </textarea>
            @if ($errors->has('description'))
                <span class="helper-block">{{$errors->first('description')}}</span>

            @endif
        </div>

        <!-- Image upload -->
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="image" class="control-label">Image</label>
            <input type="file" name="image" id="image"/>
            @if ($errors->has('image'))
                <span class="helper-block">{{$errors->first('image')}}</span>

            @endif
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-default">Add</button>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">

    </form>
</div>