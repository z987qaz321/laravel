@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－帳號管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>帳號新增</h3>
            </div>
            <div class="card-body">
                <form action="{{route('account.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">帳號</label>
                        <input type="text" name="account" class="form-control" required oninvalid="setCustomValidity('請輸入帳號')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">密碼</label>
                        <input type="password" name="password" class="form-control" required oninvalid="setCustomValidity('請輸入密碼')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">再次輸入密碼</label>
                        <input type="password" name="password2" class="form-control" required oninvalid="setCustomValidity('請再次輸入密碼')">
                        @if ($errors->has('msg'))
                            <div class="text-danger text-center alert alert-danger" >
                                <strong>{{ $errors->first('msg') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">身分別</label>
                        <select class="form-control"name="identity">
                            <option disabled selected>請選擇身份</option>
                            <option value="1">學生</option>
                            <option value="2">老師</option>
                            <option value="3">評委</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">創建</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
