@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－評委管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>評委新增</h3>
            </div>
            <div class="card-body">
                <form action="{{route('judge.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">帳號</label>
                        <input type="text" name="account" class="form-control" required oninvalid="setCustomValidity('請指定評委帳號')">
                        @if ($errors->has('msg'))
                            <div class="text-danger text-center alert alert-danger" >
                                <strong>{{ $errors->first('msg') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">姓名</label>
                        <input type="text" name="name" class="form-control" required oninvalid="setCustomValidity('請輸入評委姓名')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">電子信箱</label>
                        <input type="email" name="email" class="form-control" required oninvalid="setCustomValidity('請輸入電子信箱')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">連絡電話</label>
                        <input type="text" name="phone" class="form-control" required oninvalid="setCustomValidity('請輸入連絡電話')">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">新增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
