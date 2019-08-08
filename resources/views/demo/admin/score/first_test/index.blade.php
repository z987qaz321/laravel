@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－初試成績總覽')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>初試成績列表</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題名稱</th>
                            <th>查看</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($first_tests as $first_test)
                        <tr>
                            <th class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $first_test->teams_id)
                                        {{ $team->team_name }}
                                    @endif
                                @endforeach
                            </th>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('score_first_test.show',$first_test->first_tests_id) }}">檢視</a>
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
