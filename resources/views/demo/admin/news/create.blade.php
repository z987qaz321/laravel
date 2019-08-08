@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－公告管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>公告新增</h3>
            </div>
            <div class="card-body">
                <form action="{{route('management_news.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">公告標題</label>
                        <input type="text" name="title" class="form-control" required oninvalid="setCustomValidity('請輸入公告標題')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">上傳檔案</label>
                        <div class="form-group">
                            <input type="file" name="content" required>
                        </div>
                    </div>
                    <div class="text-center form-group mt-3">
                        <button type="submit" class="btn btn-primary btn-block">新增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
