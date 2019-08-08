@extends('demo.layout.backend.master')
    @include('demo.admin.navbar')
@section('title','專題成果展－成績排名')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>成績排名</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>專題編號</th>
                            <th>專題名稱</th>
                            <th>分數</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ranks as $rank)
                        <tr>
                            <th class="align-middle" style="width:10%;">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $rank->teams_id)
                                        {{ $team->team_number }}
                                    @endif
                                @endforeach
                            </th>
                            <td class="align-middle">
                                @foreach ($teams as $team)
                                    @if ($team->teams_id == $rank->teams_id)
                                        {{ $team->team_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="align-middle text-left" style="width:10%;">
                                {{$rank->score}}
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
