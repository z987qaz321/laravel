@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－公告管理')
@section('content')
<section class="py-5 zh-font">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>公告修改</h3>
            </div>
            <div class="card-body">
                <form action="{{route('management_news.update', $news->news_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">公告標題</label>
                        <input type="text" name="title" class="form-control" value="{{$news->title}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">已上傳檔案：<strong>{{$news->content}}</strong></label>
                    </div>
                    <div class="form-group">
                        <label class="form-label">上傳新檔案(覆蓋)</label>
                        <div class="form-group">
                            <input type="file" name="content" required>
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
