{{-- <html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions Tutorial') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div id="app">
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Coding Test 
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
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
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
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>Coding Test</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Admin Management</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{ route('home') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            
                            
                            @if(Auth::user()) 
                            @foreach(Auth::user()->getRoleNames() as $v)
                            @if($v=="Admin")
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Manage Users
                            </a>
                            @endif
                            @endforeach
                            @endif
                            <a class="nav-link collapsed" href="{{ route('roles.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Manage Role
                                
                            </a>
                            
                            <a class="nav-link collapsed" href="{{ route('products.index') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                List of Product
                                
                            </a>
                            <a class="nav-link collapsed" href="{{ route('products.create') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Create of Product
                                
                            </a>
                            <a class="nav-link collapsed" href="{{ route('products.edit',1) }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Edit of Product
                                
                            </a>
                            <a class="nav-link collapsed" href="{{ route('products.destroy',1) }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Delete All Product
                                
                            </a>
                            <a class="nav-link collapsed" href="{{ route('products.destroy',1) }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Delete All Product
                                
                            </a>
                            
                            <a class="nav-link collapsed" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Log Out
                                
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:
                        @if(Auth::user()) 
                        @foreach(Auth::user()->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                    </div>
                    @if(Auth::user()) 
                        {{Auth::user()->name}}
                    @endif
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                 <main>
                    <div class="container-fluid px-4">
                        @yield('content') 
                    </div>
                </main> 
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
