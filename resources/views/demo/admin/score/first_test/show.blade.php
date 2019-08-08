@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－初試成績總覽')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>{{$team->team_name}}-初試成績</h3>
            </div>
            <div class="card-body text-center">
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>專題名稱</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->team_name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>評分委員姓名</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$judge->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>系統分數</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$first_test->score_system}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>簡報檔分數</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$first_test->score_ppt}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{route('score_first_test.index') }}">回上頁</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
