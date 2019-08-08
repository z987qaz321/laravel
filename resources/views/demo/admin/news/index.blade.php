@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－公告管理')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>公告列表</h3>
            </div>
            <div class="card-body">
                <div class="text-right py-3">
                    <a class="btn btn-primary" href="{{route('management_news.create')}}">新增公告</a>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>日期</th>
                            <th>標題</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newies as $news)
                        <tr>
                            <th class="align-middle">
                                {{$news->created_at->format('Y-m-d')}}
                            </th>
                            <td class="align-middle">
                                {{$news->title}}
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('management_news.edit',$news->news_id)}}">修改</a>
                                <form method="POST" action="{{ route('management_news.destroy', $news->news_id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">刪除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
