@extends('demo.layout.backend.master')
@extends('demo.team.navbar')
@section('title','專題成果展－專題成果複試成績')
@section('nav_score','active')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>複試成績列表</h3>
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
                        @foreach ($retests as $retest)
                        <tr>
                            <th class="align-middle">
                                @foreach ($teachers as $teacher)
                                    @if ($teacher->teachers_id == $retest->teachers_id)
                                        {{ $teacher->name }}
                                    @endif
                                @endforeach
                            </th>
                            <td class="align-middle" style="width:10%;" >
                                <a class="btn btn-primary" href="{{route('team_score_retest.show',$retest->retests_id)}}">詳細</a>
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
