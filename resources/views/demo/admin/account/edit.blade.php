@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－帳號管理')
@section('content')
<section class="py-5 zh-font">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>帳號修改</h3>
            </div>
            <div class="card-body">
                <form action="{{route('account.update', $accounts->accounts_id)}}" method="POST">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">帳號</label>
                        <div><h4>{{$accounts->account}}</h4></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">新密碼</label>
                    <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">再次輸入新密碼</label>
                        <input type="password" name="password2" class="form-control">
                        @if ($errors->has('msg'))
                            <div class="text-danger text-center alert alert-danger">
                                <strong>{{ $errors->first('msg') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">身分別</label>
                        <div>
                            @if ($accounts->identity == '0')
                                <h4>管理員</h4>
                            @elseif($accounts->identity == '1')
                                <h4>學生</h4>
                            @elseif($accounts->identity == '2')
                                <h4>老師</h4>
                            @elseif($accounts->identity == '3')
                                <h4>評委</h4>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
