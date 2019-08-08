@extends('demo.layout.backend.master')
@extends('demo.teacher.navbar')
@section('title','專題成果展－初試評分')
@section('nav_retest','active')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>{{$team->team_number}}-{{$team->team_name}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('teacher_retest.update', $retest->retests_id)}}" method="POST">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">創意分數</label>
                        <input type="text" name="score_creative" class="form-control" value="{{$retest->score_creative}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">報告分數</label>
                        <input type="text" name="score_present" class="form-control" value="{{$retest->score_present}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">服裝分數</label>
                        <input type="text" name="score_clothing" class="form-control" value="{{$retest->score_clothing}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">評語</label>
                        <textarea name="comment" Wrap="virtual" class="form-control" rows="3">{{$retest->comment}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">建議</label>
                        <textarea name="suggest" Wrap="virtual" class="form-control" rows="3">{{$retest->suggest}}</textarea>
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
