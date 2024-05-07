<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-4">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">M</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        @auth
                            <a href="{{route('user.index')}}" class="nav-item nav-link">Profil</a>
                        @endauth
                        <a href="{{route('product.index')}}" class="nav-item nav-link">Shop</a>
                        {{-- <a href="detail.html" class="nav-item nav-link">Shop Detail</a> --}}
                        {{-- <a href="/adminPanel" class="nav-item nav-link">admin</a> --}}
                        @guest
                            <a href="{{route('login')}}" class="nav-item nav-link">Authentification</a>
                            
                        @endguest
                        @auth
                            @if (auth()->user()->is_admin == 1)
                                <a href="{{route('admin.index')}}" class="nav-item nav-link">Admin</a>
                            @endif
                        @endauth
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        {{-- <a href="{{route('category.create')}}" class="nav-item nav-link">add</a> --}}
                    </div>
                    @guest
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="{{route('login')}}" class="btn btn-md px-0 text-warning">
                            <i class="bi bi-box-arrow-in-right"></i>
                            login    
                        </a>
                        
                        <a href="{{route('register')}}" class="btn btn-md px-0 ml-3 text-warning">
                            <i class="bi bi-person-plus"></i>
                            register
                        </a>
                    </div>
                    @endguest
                    @auth
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="{{route('command.index')}}" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">{{auth()->user()->commands()->count()}}</span>
                        </a>
                    </div>
                    {{-- avatar --}}
                    <div class="dropdown ml-3">
                        <a
                          data-mdb-dropdown-init
                          class="dropdown-toggle d-flex align-items-center hidden-arrow"
                          href="#"
                          id="navbarDropdownMenuAvatar"
                          role="button"
                          aria-expanded="false"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle"
                            height="25"
                            alt="Black and White Portrait of a Man"
                            loading="lazy"
                          />
                            </a>
                            <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuAvatar"
                            >
                            <li>
                                <a class="dropdown-item" href="{{route('user.index')}}">{{auth()->user()->name}}</a>
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button class="text-danger border-0 bg-transparent mx-2" type="submit">logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endauth
                </div>
                
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
