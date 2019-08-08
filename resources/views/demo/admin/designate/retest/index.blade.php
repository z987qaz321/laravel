@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－複試管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>複試列表</h3>
            </div>
            <div class="card-body">
                <div class="text-right py-3">
                    <a class="btn btn-primary" href="{{ route('retest.create') }}">複試指派</a>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題組別</th>
                            <th>評分教師</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($retests as $retest)
                        <tr>
                            <th class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $retest->teams_id)
                                        {{ $team->team_name }}
                                    @endif
                                @endforeach
                            </th>
                            <td class="align-middle">
                                @foreach ($teachers as $teacher)
                                    @if ($teacher->teachers_id == $retest->teachers_id)
                                        {{ $teacher->name }}
                                    @endif
                                @endforeach
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('retest.edit',$retest->retests_id) }}">修改</a>
                                <form method="POST" action="{{ route('retest.destroy', $retest->retests_id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">刪除</button>
                                </form>
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
