@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－教師管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>教師列表</h3>
            </div>
            <div class="card-body">
                <div class="text-right py-3">
                    <a class="btn btn-primary" href="{{ route('teacher.create') }}">新增教師</a>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>姓名</th>
                            <th>帳號</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <th class="align-middle">
                                {{ $teacher->name }}
                            </th>
                            <td class="align-middle">
                                @foreach ($accounts as $account)
                                    @if ($account->accounts_id == $teacher->accounts_id)
                                        {{ $account->account }}
                                    @endif
                                @endforeach
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{ route('teacher.show',$teacher->teachers_id) }}">詳細</a>
                                <a class="btn btn-primary" href="{{ route('teacher.edit',$teacher->teachers_id) }}">修改</a>
                                <form method="POST" action="{{ route('teacher.destroy', $teacher->teachers_id) }}">
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
