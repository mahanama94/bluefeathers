

        <div class="row about_box">
            <div class="col-md-6">
                <div class="box1">
                    <div class="box1_left">
                        <img src="images/about_img3.jpg" class="img-responsive" alt=""/>
                        <div class="desc1">
                            <h3>{{ $trainer->getName() }}<br><span class="m_text">Classes by trainer</span></h3>
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
                        <p>{{ $trainer->getDesciption() }}</p>
                        <h4>Qualifications</h4>
                        <p class="para1">{{ $trainer->getQualifications() }}</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
