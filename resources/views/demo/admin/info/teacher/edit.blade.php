@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－教師管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>教師資訊修改</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('teacher.update', $teacher->teachers_id) }}" method="POST">
                    @csrf {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="form-label">姓名</label>
                        <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">帳號</label>
                        <input type="text" name="account" class="form-control" value="{{ $account->account }}" required>
                        @if ($errors->has('msg'))
                            <div class="text-danger text-center alert alert-danger" >
                                <strong>{{ $errors->first('msg') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">電子信箱</label>
                        <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">連絡電話</label>
                        <input type="text" name="phone" class="form-control" value="{{ $teacher->phone }}" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
