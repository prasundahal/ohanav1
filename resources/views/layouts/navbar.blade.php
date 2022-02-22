<section id="navigation-wrapper" class="navigation-wrap start-header start-style">
    <div class="container">
        <div class="row"></div>
        <div class="col-12">
            <nav class="navbar navbar-expand-lg header-sticky">

                <a class="navbar-brand p-0" href="{{ url('/') }}">

                    <img src="{{ asset('public/frontend/image/logo/logo.png')}}" alt="OHANA"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto py-4 py-md-0">
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="{{ url('/service') }}">Services</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                        {{-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Extra <span class="ml-1"><i
                                        class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                            <div class="dropdown-menu p-0 mt-1">
                                <a class="dropdown-item" href="company-profile.html">Dropdown 1</a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    </div>
</section>
