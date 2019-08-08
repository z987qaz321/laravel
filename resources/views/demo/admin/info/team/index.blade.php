@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－專題組別管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>專題組別列表</h3>
            </div>
            <div class="card-body">
                <div class="text-right py-3">
                    <a class="btn btn-primary" href="{{ route('team.create') }}">新增專題組別</a>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題組別</th>
                            <th>帳號</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                        <tr>
                            <th class="align-middle">
                                {{ $team->team_name }}
                            </th>
                            <td class="align-middle">
                                @foreach ($accounts as $account)
                                    @if ($account->accounts_id == $team->accounts_id)
                                        {{ $account->account }}
                                    @endif
                                @endforeach
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('team.show',$team->teams_id) }}">詳細</a>
                                <a class="btn btn-primary" href="{{route('team.edit',$team->teams_id) }}">修改</a>
                                <form method="POST" action="{{ route('team.destroy', $team->teams_id) }}">
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
