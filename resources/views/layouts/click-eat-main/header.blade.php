<header style="background-color: black;">
    <div class="container-custom py-1">
        <nav class="navbar navbar-expand-lg">
            <img src="{{ asset('logo/logo.png')}}" style="height: 50px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item px-4">
                        <a class="nav-link  text-white" href="{{url('/')}}">Home <div class="link1 center mt-1  "></div>
                            </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="{{url('/about-us')}}">About us <div
                                class="link2 center mt-1  "></div></a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="{{url('/services')}}">Our Services <div
                                class="link3 center mt-1  "></div></a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="{{url('/packages')}}">Packages <div
                                class="link4 center mt-1  "></div></a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="{{url('/contact-us')}}">Contact Us <div
                                class="link5 center mt-1  "></div></a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="{{url('/login')}}">Login/Register <div class="center mt-1">
                            </div></a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>
