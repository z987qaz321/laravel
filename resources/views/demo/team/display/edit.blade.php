@extends('demo.layout.backend.master')
@extends('demo.team.navbar')
@section('title','專題成果展－成果上傳')
@section('nav_display','active')

@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>專題成果上傳</h3>
            </div>
            <div class="card-body">
                <form action="{{route('team_display.update',$team->teams_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label"><h4><strong>海報</strong></h4></label>
                        <br/> 已上傳檔案：
                        <strong>{{$team->poster}}</strong>
                    </div>
                    <div class="form-group">
                        <input type="file" name="poster" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </div>
                </form>
                <form action="{{route('team_display.update',$team->teams_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label"><h4><strong>簡報</strong></h4></label>
                        <br/> 已上傳檔案：
                        <strong>{{$team->ppt}}</strong>
                    </div>
                    <div class="form-group">
                        <input type="file" name="ppt" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </div>
                </form>
                <form action="{{route('team_display.update',$team->teams_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label"><h4><strong>簡介</strong></h4></label>
                        <br/> 已上傳檔案：
                        <strong>{{$team->word}}</strong>
                    </div>
                    <div class="form-group">
                        <input type="file" name="word" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </div>
                </form>
                <form action="{{route('team_display.update',$team->teams_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label"><h4><strong>影片</strong></h4></label>
                        <br/> 已上傳檔案：
                        <strong>{{$team->video}}</strong>
                    </div>
                    <div class="form-group">
                        <input type="file" name="video" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </div>
                </form>
                <form action="{{route('team_display.update',$team->teams_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label"><h4><strong>網站</strong></h4></label>
                        <input type="text" name="website" class="form-control" value="{{$team->website}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </div>
                </form>
            </div>
            <div class="form-group text-center">
                <a class="btn btn-primary" href="{{route('team_display.index')}}">回上頁</a>
            </div>
        </div>
    </div>
</section>
@endsection
