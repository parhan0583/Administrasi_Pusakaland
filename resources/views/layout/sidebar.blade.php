<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('img/Logo_PL.png') }}" alt="">
            </span>

            <div class="text logo-text">
                <span class="name">{{auth()->user()->name}}</span>
                <span class="profession">{{auth()->user()->role}}</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links">
                @if (auth()->user()->role=='admin')
                <li class="nav-link ">
                    <a href="/Padmin" >
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Kelola Akun</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">Analytics</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role=='marketing')
                <li class="nav-link">
                    <a href="/Pmarketing">
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text nav-text">Pmarketing</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-heart icon'></i>
                        <span class="text nav-text">Likes</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role=='administrasi')
                <li class="nav-link">
                    <a href="/Padministrasi">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Notifications</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Wallets</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="/logout">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>