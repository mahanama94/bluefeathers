
<div class="col-lg-6">
    <div class="box1">
        <div class="box1_left">
            <img src="{{ asset($trainer->getImage()) }}" class="img-responsive" alt=""/>
            <div class="desc1">
                <h3>
                    <a href="{{ route('trainer.index', ['id' => $trainer->getId()]) }}">{{ $trainer->getName() }}</a>
                    <br>
                    <span class="m_text">
                        @foreach($trainer->getClasses() as $class)
                            <a href="{{ route('classes.index', ['id' , $class->getId()]) }}">
                                {{ $class->getName() }} <br>
                            </a>
                        @endforeach
                                </span>
                </h3>

                <p>Since {{ $trainer->getJoinDate() }}</p>
                <!--
                <div class="coursel_list">
                    <i class="a_heart"> </i>
                    <i class="like1"> </i>
                </div>
                <div class="coursel_list1">
                    <i class="a_twt"> </i>
                    <i class="a_fb"> </i>
                </div>
                -->

                <div class="clear"></div>
            </div>
        </div>
        <div class="box1_right">
            <h4>About</h4>
            <p>{{ $trainer->getDescription() }}</p>
            <h4>Qualifications</h4>
            <p class="para1">{{ $trainer->getQualifications() }}</p>
            @if(Auth::check())
                <ul class="buttons_class">
                    <li class="btn5"><a href="{{ route('trainer.edit', ['id'=> $trainer->getId()]) }}">Edit</a></li>
                </ul>
            @endif
        </div>
        <div class="clear"></div>
    </div>
</div>

