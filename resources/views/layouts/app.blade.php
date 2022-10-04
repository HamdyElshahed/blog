<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Blog ') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .head{
            background-color: rgb(57, 189, 223);
        }
        .alink{
            font-size:1.2rem;
            color:black;
        }
        .alink01{
            color:white;
            text-decoration:none;
        }
        a{
            color:black;
        }
        /*////////////////start footer///////////////////////*/
        .footer_back{background-color:#1a1a1a;}
        .footer_1{padding: 0rem;}
        .footer_1 ul{list-style: none; color: white;}
        .footer_1 h3{color: white;}
        .footer_back01{background-color: #1a1a1a; color:#0C65ED; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);}
        /*///////////////////end footer///////////////////////*/

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel head">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Blog
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="navbar-brand alink" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="navbar-brand alink" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="navbar-brand alink" href="{{ route('home') }}">Home</a></li>
                            <li><a class="navbar-brand alink" href="{{ route('users.index') }}">Users</a></li>
                            <li><a class="navbar-brand alink" href="{{ route('roles.index') }}">Role</a></li>
                            <li><a class="navbar-brand alink" href="{{ route('articles.index') }}">Article</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
        <footer class="fixed-bottom" style="position:relative; bottom: -300px;">
          <section class="footer_back">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="col-12 py-2 px5 footer_1">
                            <h3 class="pt-4" ><a href="{{ route('contact-us') }}" class="alink01">Contact Us</a></h3>
                            <ul class="pt-3 pb-1">
                                <li class="py-1"><i class="fas fa-map-marker-alt"></i><span class="px-4">123 Street , city, country</span></li>
                                <li class="py-1"><i class="fas fa-phone-volume"></i><span class="px-4">123456789</span></li>
                                <li class="py-1"><i class="far fa-envelope"></i><span class="px-4">example@gmail.com</span></li>
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            </section>
         <section class="footer_back01">
            <div class="text-center">
                <p class="py-4 m-0">
                    @ HS 2021
                </p>

            </div>
          </section>
    </footer>
    </div>
</body>
</html>
