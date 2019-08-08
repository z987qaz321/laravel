@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－帳號管理')
@section('content')
<section class="py-5 zh-font">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>帳號列表</h3>
            </div>
            <div class="card-body">
                <div class="text-right py-3">
                    <a class="btn btn-primary" href="{{route('account.create')}}">新增帳號</a>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>帳號</th>
                            <th>身份</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as $account)
                        <tr>
                            <th class="align-middle">
                                {{$account->account}}
                            </th>
                            <td class="align-middle">
                                @if ($account->identity=='0')
                                    管理員
                                @elseif($account->identity=='1')
                                    學生
                                @elseif($account->identity=='2')
                                    老師
                                @elseif($account->identity=='3')
                                    評委
                                @endif
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('account.edit',$account->accounts_id)}}">修改</a>
                                <form method="POST" action="{{ route('account.destroy', $account->accounts_id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">刪除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $accounts->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
