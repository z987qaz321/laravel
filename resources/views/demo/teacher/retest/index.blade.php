@extends('demo.layout.backend.master')
@extends('demo.teacher.navbar')
@section('title','專題成果展－複試評分')
@section('nav_retest','active')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>複試列表</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center align-middle">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題編號</th>
                            <th>專題名稱</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($retests as $retest)
                        <tr>
                            <th class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $retest->teams_id)
                                        {{ $team->team_number }}
                                    @endif
                                @endforeach
                            </th>
                            <td class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $retest->teams_id)
                                        {{ $team->team_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('teacher_retest.edit',$retest->retests_id)}}">評分</a>
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
