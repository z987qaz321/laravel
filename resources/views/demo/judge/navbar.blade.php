<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top zh-font">
    <div class="container">
        <a class="navbar-brand" href="#">專題成果展</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item @yield('nav_active')">
                    <a class="nav-link" href="{{route('judge_first_test.index')}}">
                        初試評分
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">
                        登出
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


