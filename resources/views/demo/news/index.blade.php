@extends('demo.layout.frontend.master')
@section('title','專題成果展－最新消息')
@section('nav_news','active')
@section('content')
<section class="py-5">
    <div class="container">
        <h1>News</h1>
        <hr>
    </div>
    <div class="container zh-font">
        <table class="table table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th style="width:15%;">日期</th>
                    <th>公告</th>
                    <th style="width:10%;">下載</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newies as $news)
                <tr>
                    <th>
                        {{$news->created_at->format('Y-m-d')}}
                    </th>
                    <td>
                        {{$news->title}}
                    </td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{asset('./uploads')}}/{{$news->content}}">下載</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
