@extends('demo.layout.frontend.master')
@section('title','專題成果展－專題資料')
@section('nav_display','active')
@section('content')
<section class="py-5">
    <div class="container">
        <h1>Project Detail</h1>
        <hr>
    </div>
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>{{$team->team_number}}－{{$team->team_name}}</h3>
            </div>
            <div class="card-body text-center">
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
                                    @else --
                                    @endif
                                </td>
                                <td>
                                    @if ($team->ppt)
                                    <a href="{{asset('./uploads')}}/{{$team->ppt}}" class="btn btn-outline-primary">簡報</a>
                                    @else --
                                    @endif
                                </td>
                                <td>
                                    @if ($team->word)
                                    <a href="{{asset('./uploads')}}/{{$team->word}}" class="btn btn-outline-primary">簡介</a>
                                    @else --
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($team->video)
                                    <a href="{{asset('./uploads')}}/{{$team->video}}" class="btn btn-outline-primary">影片</a>
                                    @else --
                                    @endif
                                </td>
                                <td>
                                    @if ($team->website)
                                    <a href="{{$team->website}}" class="btn btn-outline-primary">網站</a>
                                    @else --
                                    @endif
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{route('display.index') }}">回上頁</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
