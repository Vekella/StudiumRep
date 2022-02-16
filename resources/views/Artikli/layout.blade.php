<!DOCTYPE html>
<html>
    <head>
        @yield('HeadContent')
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    <body>
        {{-- @include('auth.login')   --}}
        <div class="container">
            <nav class='navbar navbar-inverse'>
                <div class='navbar-header'>
                    <a class="navbar-brand" href="{{URL::to('artikli') }}">Artikli</a>

                    {{-- {{Auth::user()}} --}}
                </div>

                <ul class='nav navbar-nav'>
                    <li>
                        <a href="{{URL::to('artikli')}}">Prikaz svih artikala</a>
                        
                    </li>
                    <li>
                        <a href="{{URL::to('artikli/create')}}">Unesi novi artikl</a>
                    </li>
                    @if (Auth::check())
                        
                        <li><a href="/logout">Logout: {{Auth::user()->name}}</a></li>

                    
                        @else

                        <li><a href="/login">Login</a></li>
                        

                    @endif
                   
                    <li><a href="/register">Register</a></li>
                </ul>
            </nav>
            <div>
                @yield('Content')
            </div>
        </div>

    </body>
</html>