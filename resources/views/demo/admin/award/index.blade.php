@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－得獎名單管理')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>得獎名單列表</h3>
            </div>
            <div class="card-body">
                <div class="text-right py-3">
                    <a class="btn btn-primary" href="{{route('management_award.create')}}">新增得獎名單</a>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>學年度</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $award)
                        <tr>
                            <th class="align-middle">
                                {{$award->year}}學年度-得獎名單
                            </th>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('management_award.edit',$award->awards_id)}}">修改</a>
                                <form method="POST" action="{{ route('management_award.destroy', $award->awards_id) }}">
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
