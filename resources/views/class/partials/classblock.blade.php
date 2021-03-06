<div class="col-md-6">

    <div class="class_left">
        <a href="#"><img src="{{ asset($class->getImage()) }}" class="img-responsive" alt="{{ $class->getName() }}"
                         title="continue"></a>
    </div>

    <div class="class_right1">
        <h3><a href="{{ route('classes.index', ['id' => $class->getId()]) }}"> {{ $class->getName() }} </a></h3>
        <p>{{ $class->getDescription() }}</p>

        <div class="class_img">

            {{--*/
                $trainer = $class->getTrainer();
            /*--}}

            <img src="{{ asset($trainer->getImage()) }}" alt=""/>

            <div class="class_desc1">
                <h4><a href="{{ route('trainer.index', ['id' => $trainer->getId()]) }}">
                        {{ $class->getTrainer()->getName() }}
                    </a>
                </h4>
                <h5>{{ $class->getStatus() }}</h5>
                <p>{{ $trainer->getDescription() }}</p>
            </div>

            <div class="clear"></div>

            <ul class="buttons_class">
                <li class="btn7"><a href="{{ route('classes.index', ['id' => $class->getId()]) }}">Read More</a></li>
                <li class="btn8"><a href="#">Timetable</a></li>
                <div class="clear"></div>
            </ul>
            @if(Auth::check())
                <ul class="buttons_class">
                    <li class="btn7"><a href="#">Edit</a> </li>
                </ul>
            @endif

        </div>
    </div>
</div>
<div class="clear"></div>