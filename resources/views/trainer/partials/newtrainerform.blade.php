            <div class="col-lg-6">
                <form class="form-vertical" role="form" method="post" action="{{ route('trainers.new') }}">

                    <!-- NAME -->
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class ="control-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Trainer Name" value="{{ Request::old('name') ?:''}}">
                        @if ($errors->has('name'))
                            <span class="helper-block">{{$errors->first('name')}}</span>

                        @endif
                    </div>

                    <!-- EMAIL -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class ="control-label">E-mail</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail address" value="{{ Request::old('email') ?:''}}">
                        @if ($errors->has('email'))
                            <span class="helper-block">{{$errors->first('email')}}</span>

                        @endif
                    </div>

                    <!-- QUALIFICATIONS -->
                    <div class="form-group{{ $errors->has('qualifications') ? ' has-error' : '' }}">
                        <label for="name" class ="control-label">Qualifications </label>
                        <textarea name="qualifications" class="form-control" id="name" placeholder="Qualifications" value="{{ Request::old('qualifications') ?:''}}"></textarea>
                        @if ($errors->has('qualifications'))
                            <span class="helper-block">{{$errors->first('qualifications')}}</span>

                        @endif
                    </div>

                    <!-- DESCIPTION -->
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class ="control-label">Description </label>
                        <textarea name="description" class="form-control" id="name" placeholder="Description" value="{{ Request::old('description') ?:''}}"></textarea>
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