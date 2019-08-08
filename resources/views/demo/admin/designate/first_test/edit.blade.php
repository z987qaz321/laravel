@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－初試管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>初試資訊修改</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('first_test.update',$first_test->first_tests_id) }}" method="POST">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">專題組別帳號</label>
                        <input type="text" name="account_team" class="form-control" value="{{$account_team->account}}">
                        @if ($errors->has('msgTeam'))
                            <div class="text-danger text-center alert alert-danger">
                                <strong>{{ $errors->first('msgTeam') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">評委帳號</label>
                        <input type="text" name="account_judge" class="form-control" value="{{$account_judge->account}}">
                        @if ($errors->has('msgJudge'))
                            <div class="text-danger text-center alert alert-danger">
                                <strong>{{ $errors->first('msgJudge') }}</strong>
                            </div>
                        @endif
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
