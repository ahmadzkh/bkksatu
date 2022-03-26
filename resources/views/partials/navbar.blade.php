<nav class="navbar py-4 navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand bold" href="/home">
            <img src="{{asset ('assets/img/logoobkk.png')}}" alt="bkk_logo" style="width: 120px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav medium text-center">
                <li class="nav-item ms-lg-5">
                    <a class="nav-link {{ ($active === 'home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item ms-lg-5">
                    <a class="nav-link {{ ($active === 'alumni') ? 'active' : ''}}" href="/alumni">Alumni</a>
                </li>
                <li class="nav-item ms-lg-5">
                    <a class="nav-link {{ ($active === 'vacancy') ? 'active' : ''}}" href="/vacancy">Job Vacancy</a>
                </li>
                <li class="nav-item ms-lg-5">
                    <a class="nav-link {{ ($active === 'partner') ? 'active' : ''}}" href="/mitra">Partners</a>
                </li>
                <li class="nav-item ms-lg-5">
                    <a class="nav-link {{ ($active === 'information') ? 'active' : ''}}" href="/information">Information</a>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav ms-auto">
                    <div class="dropdown">
                        <div class="row m-0 p-0 user" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="col m-2 p-0"><box-icon name="user-circle"></box-icon></div>
                            <div class="col m-2 p-0"><p>{{auth()->user()->username}}</p></div>
                            <div class="col m-2 p-0 dropdown-toggle"></div>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                            <li><a class="dropdown-item" href="/account">My Account</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </ul>
                @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/login" class="btn-login text-decoration-none semibold">Login</a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
