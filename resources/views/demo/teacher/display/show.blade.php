@extends('demo.layout.backend.master')
@extends('demo.teacher.navbar')
@section('title','專題成果－專題資料')
@section('nav_display','active')

@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>專題詳細資料</h3>
            </div>
            <div class="card-body">
                <div class="card-body text-center">
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>專題學制</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$team->education}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>專題班級</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$team->class}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
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
                    <div class="form-group">
                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="3">相關資料</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($team->poster)
                                            <a href="{{asset('./uploads')}}/{{$team->poster}}" class="btn btn-outline-primary">海報</a>
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>
                                        @if ($team->ppt)
                                            <a href="{{asset('./uploads')}}/{{$team->ppt}}" class="btn btn-outline-primary">簡報</a>
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>
                                        @if ($team->word)
                                            <a href="{{asset('./uploads')}}/{{$team->word}}" class="btn btn-outline-primary">簡介</a>
                                        @else
                                            --
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @if ($team->video)
                                            <a href="{{asset('./uploads')}}/{{$team->video}}" class="btn btn-outline-primary">影片</a>
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>
                                        @if ($team->website)
                                            <a href="{{$team->website}}" class="btn btn-outline-primary">網站</a>
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{route('teacher_display.index')}}">回上頁</a>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
