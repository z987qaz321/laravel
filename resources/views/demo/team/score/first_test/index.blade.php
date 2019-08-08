@extends('demo.layout.backend.master')
@extends('demo.team.navbar')
@section('title','專題成果展－專題成果初試成績')
@section('nav_score','active')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>初試成績列表</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>評分委員</th>
                            <th>查看</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($first_tests as $first_test)
                        <tr>
                            <th class="align-middle">
                                @foreach ($judges as $judge)
                                    @if ($judge->judges_id == $first_test->judges_id)
                                        {{ $judge->name }}
                                    @endif
                                @endforeach
                            </th>
                            <td class="align-middle" style="width:10%;" >
                                <a class="btn btn-primary" href="{{route('team_score_first_test.show',$first_test->first_tests_id)}}">詳細</a>
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
