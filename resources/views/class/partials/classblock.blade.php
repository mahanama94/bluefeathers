


        <div class="col-md-6">

            <div class="class_left">
                <a href="#"><img src="{{ asset('images/c4.jpg') }}" class="img-responsive"  alt="{{ $class->getName() }}" title="continue"></a>
            </div>

            <div class="class_right1">
                <h3>{{ $class->getName() }}</h3>
                <p>{{ $class->getDescription() }}</p>

                <div class="class_img">

                    <img src="{{ asset('images/c12.jpg') }}" alt=""/>

                    <div class="class_desc1">
                        <h4>{{ $class->getTrainer()->getName() }}</h4>
                        <h5>Class Status</h5>
                        <p>Some another description</p>
                    </div>

                    <div class="clear"></div>

                    <ul class="buttons_class">
                        <li class="btn7"><a href="#">Read More</a></li>
                        <li class="btn8"><a href="#">Timetable</a></li>
                        <div class="clear"></div>
                    </ul>

                </div>
            </div>
        </div>
        <div class="clear"></div>