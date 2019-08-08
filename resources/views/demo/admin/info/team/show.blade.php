@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－專題組別管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>專題組別資訊</h3>
            </div>
            <div class="card-body text-center">
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>帳號</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$account->account}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>專題編號</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->team_number}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                <th>指導老師</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$teacher->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>專題領域</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->team_field}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>專題分類</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->team_category}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>學制</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->education}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>班級</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->class}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>專題成員</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$team->member}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{route('team.index') }}">回上頁</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
