@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－教師管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>教師資訊</h3>
            </div>
            <div class="card-body text-center">
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>姓名</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $teacher->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>帳號</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $account->account }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>電子信箱</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $teacher->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <table class="table table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>連絡電話</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $teacher->phone }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('teacher.index') }}">回上頁</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
