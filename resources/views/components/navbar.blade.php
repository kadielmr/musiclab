<nav class="navbar navbar-expand-lg fixed-top" id="MainNav">
    
    <div class="container-fluid px-4" id="navContainer">

        {{-- 𝗽𝗶𝘁𝘁𝗼𝗴𝗿𝗮𝗺𝗺𝗮 --}}
        <a class="navbar-brand col-3 ps-4 d-none pittogramma" href="{{route('homepage')}}"><img src="/media/pittogramma.svg" alt="musiclab" style="width:3rem"></a>

        {{-- 𝗹𝗼𝗴𝗼𝘁𝗶𝗽𝗼 --}}
        <a class="navbar-brand col-3 ps-2 logotipo" href="{{route('homepage')}}"><img src="/media/logoB.svg" alt="musiclab" style="width:13rem"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
            
            <ul class="navbar-nav ms-auto text-end text-md-center">    
                <li class="nav-item mx-2">
                    <a class="nav-link textBlackCus" href="{{route('index-album')}}">All albums</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link textBlackCus" href="{{route('index-album')}}">Playlists</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link textBlackCus" href="{{route('index-album')}}">Articles</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link textBlackCus" href="{{route('index-album')}}">All events</a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto align-items-end justify-content-end col-5">
                @guest
                <li class="pt-3">
                    <h5 class="textBlackCus">Hello Guest!</h5>
                </li>
                @else
                <li class="pt-3">
                    <h5 class="textBlackCus">Hello {{Auth::user()->name}}!</h5>
                </li> 
                @endguest   
                <li class="dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid pt-3 fa-face-smile fa-xl textBlackCus"></i>
                    </a> 
                    <ul class="dropdown-menu bgBlackCus py-3 rounded-0">
                        @guest
                        <li><a class="dropdown-item textWhiteCus" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item textWhiteCus" href="{{route('register')}}">Register</a></li>
                        @endguest
                        @auth
                        <li><a class="dropdown-item textWhiteCus" href="{{route('create-album')}}">Share album</a>
                        </li>
                        @endauth
                        @auth
                        <li><a class="dropdown-item textWhiteCus" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                        <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">@csrf</form> 
                        @endauth   
                    </ul>
                </li>
                
                <form class="mt-3 mt-md-0 searchform ms-5" role="search">
                    <input class="form-control me-2 inputsearch" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark btnsearch" type="submit"><i class="fa-solid fa-magnifying-glass textWhiteCus"></i></button>
                </form> 
                
            </ul>
        </div>
        
        
    </div>
    
</nav>


