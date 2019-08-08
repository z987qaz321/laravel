<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top zh-font">
    <div class="container">
        <a class="navbar-brand" href="#">專題成果展</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        前端管理
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                        <h6 class="dropdown-header"><strong>前端資訊</strong></h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('management_news.index')}}">公告管理</a>
                            <a class="dropdown-item" href="{{route('management_process.index')}}">活動流程</a>
                            <a class="dropdown-item" href="{{route('management_award.index')}}">得獎名單</a>
                            <a class="dropdown-item" href="{{route('management_album.index')}}">活動花絮</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        後端管理
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                        <h6 class="dropdown-header"><strong>使用者帳號</strong></h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('account.index')}}">帳號管理</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header"><strong>使用者資訊</strong></h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('team.index')}}">專題組別</a>
                            <a class="dropdown-item" href="{{route('teacher.index')}}">教師</a>
                            <a class="dropdown-item" href="{{route('judge.index')}}">評委</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header"><strong>評分指派</strong></h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('first_test.index')}}">初試指派</a>
                            <a class="dropdown-item" href="{{route('retest.index')}}">複試指派</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        成績總覽
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                        <h6 class="dropdown-header"><strong>成績資訊</strong></h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('rank.index')}}">成績排名</a>
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
