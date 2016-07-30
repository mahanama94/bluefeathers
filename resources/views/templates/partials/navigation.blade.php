

        <div class="menu" id="menu">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""/></a>
                </div>
                <div class="h_menu4"><!-- start h_menu4 -->
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="nav">
                        <li><a href="{{ route('home') }}">      Home    </a></li>
                        <li><a href="{{ route('about') }}">     About   </a></li>
                        <li><a href="{{ route('trainers') }}">  Trainers</a></li>
                        <li><a href="{{ route('classes') }}">   Classes </a></li>
                        <li><a href="{{ route('prices') }}">    Pricing </a></li>
                        <li><a href="{{ route('contact') }}">   Contact </a></li>

                        @if(Auth::check())

                            <li><a href="#">                                Settings    </a></li>
                            <li><a href="{{ route('auth.logout') }}">       LogOut      </a></li>

                        @endif
                    </ul>

                    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>

                </div><!-- end h_menu4 -->
                <div class="clear"></div>
            </div>
        </div>