@extends('demo.layout.frontend.master')
@section('title','專題成果展－成果展示')
@section('nav_display','active')
@section('content')
<section class="py-5">
    <div class="container">
        <h1>Project</h1>
        <hr>
    </div>
    <div class="container zh-font">
        <h3>研究所</h3>
        <hr>
        <table class="table table-hover zh-font text-center">
            <thead class="thead-dark">
                <tr>
                    <th style="width:10%;">編號</th>
                    <th>專題名稱</th>
                    <th style="width:10%;">詳細資料</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($institute_arr as $institute)
                <tr>
                    <th class="align-middle">{{$institute->team_number}}</th>
                    <td class="align-middle">{{$institute->team_name}}</td>
                    <td class="align-middle">
                        <a class="btn btn-outline-info" href="{{route('display.show',$institute->teams_id)}}">查看</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container zh-font">
        <h3>大學部</h3>
        <hr>
        <table class="table table-hover zh-font text-center">
            <thead class="thead-dark">
                <tr>
                    <th style="width:10%;">編號</th>
                    <th>專題名稱</th>
                    <th style="width:10%;">詳細資料</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($university_arr as $university)
                <tr>
                    <th class="align-middle">{{$university->team_number}}</th>
                    <td class="align-middle">{{$university->team_name}}</td>
                    <td class="align-middle">
                        <a class="btn btn-outline-info" href="{{route('display.show',$university->teams_id)}}">查看</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container zh-font">
        <h3>五專部</h3>
        <hr>
        <table class="table table-hover zh-font text-center">
            <thead class="thead-dark">
                <tr>
                    <th style="width:10%;">編號</th>
                    <th>專題名稱</th>
                    <th style="width:10%;">詳細資料</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($specialist_arr as $specialist)
                <tr>
                    <th class="align-middle">{{$specialist->team_number}}</th>
                    <td class="align-middle">{{$specialist->team_name}}</td>
                    <td class="align-middle">
                        <a class="btn btn-outline-info" href="{{route('display.show',$specialist->teams_id)}}">查看</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container zh-font">
        <h3>進修部</h3>
        <hr>
        <table class="table table-hover zh-font text-center">
            <thead class="thead-dark">
                <tr>
                    <th style="width:10%;">編號</th>
                    <th>專題名稱</th>
                    <th style="width:10%;">詳細資料</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advanced_studies_arr as $advanced_studies)
                <tr>
                    <th class="align-middle">{{$advanced_studies->team_number}}</th>
                    <td class="align-middle">{{$advanced_studies->team_name}}</td>
                    <td class="align-middle">
                        <a class="btn btn-outline-info" href="{{route('display.show',$advanced_studies->teams_id)}}">查看</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
