<!-- Styles -->
    <style>
    .topnav{
    height:fit-content;
    position: fixed;
    margin:auto;
    width: 100vw;
    background-color:black;
    flex-direction: row;
    display: flex;
    justify-content: space-between;
    z-index: 13;
    overflow: hidden;
}
.logonav{
    justify-content: left;
    display: inline-block;
    margin-top: 0.25rem;
    list-style: none;
    color: white;
    font-size: 2.5rem;
    letter-spacing: 0.25rem;
    padding: 1rem 0;
    margin-left: 2rem;
    font-family: 'Fredericka the Great', cursive;
    text-decoration: none;
}

.topnav ul li{
    margin-bottom: 1.55rem;
    justify-content: right;
    margin-right: 1.3rem;
    list-style: none;
    display: inline-block;
    margin-top: 1.55rem;
}
ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 1.5rem;
    letter-spacing: 0.25rem;
    padding: 1.55rem;
    transition: all ease 0.25s;
    font-weight: 600;  
}
ul li a:hover{
    background-color:gray;
    cursor: pointer;
}

.active{
    background-color: #666;
    color: white;
}
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <!---nav bar-->
    <nav class="topnav">
        <li><a class="logonav" href="welcome">WriteItUp</a></li>
        <ul class="nav" id="navi">
        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
    </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
