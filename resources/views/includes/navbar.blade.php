<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            {{-- <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a> --}}
            <h1 class="navbar-brand">Shop Gits</h1>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @auth

                        <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg') }}" alt="User Avatar">
                    @endauth
                    @guest
                        <img class="user-avatar rounded-circle" src="{{ asset('images/default.jpg') }}" alt="User Avatar">
                    @endguest
                </a>

                @auth
                    <form action="{{ route('logout.handle') }}" method="POST">
                        @csrf
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My
                                Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Edit
                                Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Change
                                Password</a>
                            <button type="submit" class="nav-link"><i class="fa fa-power -off"></i>Logout</button>
                        </div>
                    </form>
                @endauth
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ route('login.handle') }}"><i class="fa fa-power -off"></i>Login</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->
