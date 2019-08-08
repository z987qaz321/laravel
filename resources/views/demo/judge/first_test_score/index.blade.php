@extends('demo.layout.backend.master')
@extends('demo.judge.navbar')
@section('title','專題成果展－初試評分')
@section('nav_active','active')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>初試列表</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題編號</th>
                            <th>專題名稱</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($first_tests as $first_test)
                        <tr>
                            <th class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $first_test->teams_id)
                                        {{ $team->team_number }}
                                    @endif
                                @endforeach
                            </th>
                            <td class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $first_test->teams_id)
                                        {{ $team->team_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('judge_first_test.edit',$first_test->first_tests_id)}}">評分</a>
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
