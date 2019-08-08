@extends('demo.login.master')
@section('title','專題成果展－登入')
@section('nav_login','active')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>登入</h3>
            </div>
            <div class="card-body">
                <form action="{{route('postlogin')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Account</label>
                        <input type="text" id="inputAccount" name="account" class="form-control" placeholder="請輸入帳號" required autofocus>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="請輸入密碼" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Captcha</label>
                        <input class="form-control" name="captcha" placeholder="請輸入驗證碼">
                    </div>
                    <div class="form-group mt-3">
                        <img src="{{captcha_src('custom')}}" onclick="this.src='{{captcha_src('custom')}}'+Math.random()">
                        <div class="align-text-bottom">
                            <small class="text-muted">點擊圖片可更換驗證碼</small>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">登入</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
