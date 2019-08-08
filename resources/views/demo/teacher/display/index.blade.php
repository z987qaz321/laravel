@extends('demo.layout.backend.master')
@extends('demo.teacher.navbar')
@section('title','專題成果－指導組別')
@section('nav_display','active')

@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>指導組別列表</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題編號</th>
                            <th>專題名稱</th>
                            <th>查看</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                        <tr>
                            <th class="align-middle">
                                {{$team->team_number}}
                            </th>
                            <td class="align-middle">
                                {{$team->team_name}}
                            </td>
                            <td class="align-middle" style="width:10%;" >
                                <a class="btn btn-primary" href="{{route('teacher_display.show',$team->teams_id)}}">詳細</a>
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
