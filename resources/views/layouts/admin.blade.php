<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>FreshMann</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark  mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/" title="FRESHMANN">FRESHMANN</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    {{-- <a class="nav-link" href="/admin">Home <span class="sr-only">Home</span></a> --}}
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->firstname }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </nav>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas side-nav  pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link side-link" href="/admin">Home</a></li>
                    @if(Auth::user()->isAdmin())
                    <li class="nav-item"><a class="nav-link side-link" href="/admin/categories">All Product Categories</a></li>
                    <li class="nav-item"><a class="nav-link side-link" href="/admin/category/create">New Product Category</a></li>
                    <li class="nav-item"><a class="nav-link side-link" href="/admin/inventory-items">All Inventory Item</a></li>
                    <li class="nav-item"><a class="nav-link side-link" href="/admin/inventory/create">Create New Inventory Item</a></li>
                    @endif
                </ul>
            </div>
            <!--/col-->
    
            <div class="col main pt-5 mt-3">
                
               
    
                
              
                 @yield('content')
           
                
              
    
               
              
               
                
    
              
                    
                    
                    
                   
    
                
                    
                 
                   
                </div><!--/row-->
    
            </div>
            <!--/main col-->
        </div>
    
    </div>
   
    
 
 
    <script src="/js/app.js"></script>
</body>
 
</html>