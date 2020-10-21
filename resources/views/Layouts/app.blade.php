<!DOCTYPE html>
    <html lang="{{str_replace('_','-',app()->getLocale())}}">
        <head>
            <title>{{config('app.name','Authentication')}}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!-- csrf token -->
            <meta name="csrf-token" content="{{csrf_token()}}">

            <!--scripts -->
            <script src="{{asset('js/app.js')}}"defer></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <body>
            <div id="app">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a href="{{url('/')}}" class="navbar-brand">{{config('app.name','Authentication')}}</a>
                    <button class="navbar-toggler" type="button"data-toggle="collapse" data-target="#navbarMenuContent" aria-controls="navbarMenuContent"aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarMenuContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- auth links -->
                            @guest()
                                <li class="nav-item"><a class="nav-link" href="{{route('staff_login')}}">{{__('Login')}}</a> </li>
                                @if(Route::has('staff_register'))
                                    <li class="nav-item"><a class="nav-link" href="{{route('staff_register')}}">{{__('Create Account')}}</a></li>
                                @endif
                            @else

                            <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">{{__('Contact Us')}}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">{{__('About Us')}}</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="accountDropdown" role="button" data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                                    {{Auth::user()->first_name}}  {{Auth::user()->last_name}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('Sign Out')}}</a>
                                    <form id="logout-form"action="{{route('logout')}}"method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>

                </nav>

                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </body>
    </html>

</html>
