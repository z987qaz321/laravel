<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top zh-font">
    <div class="container">
        <a class="navbar-brand" href="{{route('news.index')}}">專題成果展</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item @yield('nav_news')">
                    <a class="nav-link" href="{{route('news.index')}}">
                        最新消息
                    </a>
                </li>
                <li class="nav-item @yield('nav_process')">
                    <a class="nav-link" href="{{route('process.index')}}">
                        活動流程
                    </a>
                </li>
                <li class="nav-item @yield('nav_display')">
                    <a class="nav-link" href="{{route('display.index')}}">
                        成果展示
                    </a>
                </li>
                <li class="nav-item @yield('nav_award')">
                    <a class="nav-link" href="{{route('award.index')}}">
                        榮譽榜
                    </a>
                </li>
                <li class="nav-item @yield('nav_album')">
                    <a class="nav-link" href="{{route('album.index')}}">
                        活動花絮
                    </a>
                </li>
                <li class="nav-item @yield('nav_login')">
                    <a class="nav-link" href="{{route('login')}}">
                        登入
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


