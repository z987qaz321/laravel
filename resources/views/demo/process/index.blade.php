@extends('demo.layout.frontend.master')
@section('title','專題成果展－活動流程')
@section('nav_process','active')
@section('content')
<section class="py-5">
    <div class="container">
        <h1>Program</h1>
        <hr>
    </div>
    <div class="container zh-font">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>{{ $process->title }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div>{!! nl2br($process->content) !!}</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
