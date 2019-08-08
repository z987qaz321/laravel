<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top zh-font">
    <div class="container">
        <a class="navbar-brand" href="#">專題成果展</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item @yield('nav_display')">
                    <a class="nav-link" href="{{route('team_display.index')}}">
                        專題成果上傳
                    </a>
                </li>
                <li class="nav-item dropdown @yield('nav_score')">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        專題成果成績
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                        <h6 class="dropdown-header"><strong>成績資訊</strong></h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('team_score_first_test.index')}}">初試成績</a>
                            <a class="dropdown-item" href="{{route('team_score_retest.index')}}">複試成績</a>
                        <div class="dropdown-divider"></div>
                    </div>
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


