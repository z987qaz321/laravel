@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－流程管理')
@section('content')
<section class="py-5 zh-font">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>流程修改</h3>
            </div>
            <div class="card-body">
                <form action="{{route('management_process.update', $process->processes_id)}}" method="POST">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">流程標題</label>
                        <input type="text" name="title" class="form-control" value="{{$process->title}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">流程內容</label>
                        <textarea name="content" Wrap="virtual" class="form-control" rows="10">{{$process->content}}</textarea>
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
