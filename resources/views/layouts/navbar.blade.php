<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-primary"  href="{{url('/')}}">
            <!-- <img src="../../../public/images/forum1.png" alt=""> -->
            Forum News IT
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accounts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @guest
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        @endguest
                        @auth
                        <form id="logoutForm" action="{{route('logout')}}" method="POST">
                            @csrf
                        
                        <li><a onclick="document.getElementById('logoutForm').submit()" class="dropdown-item">Logout</a></li>
                        </form>
                        @endauth
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Collectives
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('collectives.index')}}">Collective
                                My Collectives
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('collectives.create')}}">
                                Create Collective
                            </a>
                        </li>
                    </ul>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Posts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('posts.index')}}">Collective
                                My Posts
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('posts.create')}}">
                                Create Post
                            </a>
                        </li>
                    </ul>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>