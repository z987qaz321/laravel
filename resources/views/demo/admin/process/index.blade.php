@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－流程管理')
@section('content')
<section class="py-5">
    <div class="container zh-font mt-5">
        <div class="card mx-auto">
            <div class="card-header">
                <h3>流程列表</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>最後更新時間</th>
                            <th>標題</th>
                            <th>管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($processes as $process)
                        <tr>
                            <th class="align-middle">
                                {{$process->updated_at->format('Y-m-d')}}
                            </th>
                            <td class="align-middle">
                                {{$process->title}}
                            </td>
                            <td style="width:10%;" class="align-middle">
                                <a class="btn btn-primary" href="{{route('management_process.edit',$process->processes_id)}}">修改</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</section>
@endsection
