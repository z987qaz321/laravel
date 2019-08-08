@extends('demo.layout.backend.master')
@extends('demo.judge.navbar')
@section('title','專題成果展－初試評分')
@section('nav_active','active')
@section('content')
<section class="py-5 zh-font">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>{{$team->team_number}}-{{$team->team_name}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('judge_first_test.update', $first_test->first_tests_id)}}" method="POST">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">系統分數</label>
                        <input type="text" name="score_system" class="form-control" value="{{$first_test->score_system}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">簡報檔分數</label>
                        <input type="text" name="score_ppt" class="form-control" value="{{$first_test->score_ppt}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">評語</label>
                        <textarea name="comment" Wrap="virtual" class="form-control" rows="3">{{$first_test->comment}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">建議</label>
                        <textarea name="suggest" Wrap="virtual" class="form-control" rows="3">{{$first_test->suggest}}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">送出評分</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
