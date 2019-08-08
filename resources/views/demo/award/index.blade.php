@extends('demo.layout.frontend.master')
@section('title','專題成果展－榮譽榜')
@section('nav_award','active')
@section('content')
<section class="py-5">
    <div class="container">
        <h1>Awards</h1>
        <hr>
    </div>
    <div class="container zh-font">
        <table class="table table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th style="width:15%;">日期</th>
                    <th>學年度</th>
                    <th style="width:10%;">下載</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($awards as $award)
                <tr>
                    <th>
                        {{$award->created_at->format('Y-m-d')}}
                    </th>
                    <td>
                        {{$award->year}}學年度-得獎名單
                    </td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{asset('./uploads')}}/{{$award->filename}}">下載</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
