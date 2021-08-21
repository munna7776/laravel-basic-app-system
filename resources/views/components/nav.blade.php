        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('user_image/logo.jpeg')}}" height="50px" width="70px" alt="Logo">
                    <span class="text-danger ps-2 fs-5 fw-bolder">{{__('Shubhchintak Foundation Trust')}}</span>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  ms-3" id="navbarSupportedContent">
                    <!-- Authentication Links -->
                    @if (Route::has('login'))
                        @auth
                            <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" aria-current="page" href="{{url('/home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" aria-current="page" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Event</a>
                                </li>
                                <x-eventModal />
                            </ul>
                        @else
                            <ul class="navbar-nav ms-auto me-2">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" aria-current="page" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" aria-current="page" href="{{ route('register')  }}">Register</a>
                                    </li>
                                @endif
                            </ul>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
