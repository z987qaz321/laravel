@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－專題組別管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>專題組別新增</h3>
            </div>
            <div class="card-body">
                <form action="{{route('team.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">專題組別帳號</label>
                        <input type="text" name="account_team" class="form-control" required oninvalid="setCustomValidity('請指定專題組別帳號')">                        @if ($errors->has('msgTeam'))
                        <div class="text-danger text-center alert alert-danger">
                            <strong>{{ $errors->first('msgTeam') }}</strong>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">指導老師帳號</label>
                        <input type="text" name="account_teacher" class="form-control" required oninvalid="setCustomValidity('請指定指導老師帳號')">                        @if ($errors->has('msgTeacher'))
                        <div class="text-danger text-center alert alert-danger">
                            <strong>{{ $errors->first('msgTeacher') }}</strong>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題編號</label>
                        <input type="text" name="team_number" class="form-control" required oninvalid="setCustomValidity('請輸入專題編號')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題名稱</label>
                        <input type="text" name="team_name" class="form-control" required oninvalid="setCustomValidity('請輸入專題名稱')">
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題領域</label>
                        <select class="form-control" name="team_field">
                            <option disabled selected>請選擇專題領域</option>
                            <option value="企業e化">企業e化</option>
                            <option value="數位內容與多媒體應用">數位內容與多媒體應用</option>
                            <option value="網路應用與資通安全">網路應用與資通安全</option>
                            <option value="嵌入式系統與行動計算">嵌入式系統與行動計算</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題分類</label>
                        <select class="form-control" name="team_category">
                            <option disabled selected>請選擇專題分類</option>
                            <option value="網路匯流">網路匯流</option>
                            <option value="人機互動">人機互動</option>
                            <option value="感知環境">感知環境</option>
                            <option value="創新服務">創新服務</option>
                            <option value="安全信賴">安全信賴</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">學制</label>
                        <select class="form-control" name="education">
                            <option disabled selected>請選擇學制</option>
                            <option value="五專部">五專部</option>
                            <option value="大學部">大學部</option>
                            <option value="研究所">研究所</option>
                            <option value="進修部">進修部</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">班級</label>
                        <select class="form-control" name="class">
                            <option disabled selected>請選擇班級</option>
                            <option value="資管五甲">資管五甲</option>
                            <option value="資管四1">資管四1</option>
                            <option value="資管四2">資管四2</option>
                            <option value="資管四A">資管四A</option>
                            <option value="資工四1">資工四1</option>
                            <option value="資管碩二">資管碩二</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題成員</label>
                        <input type="text" name="member" class="form-control" required oninvalid="setCustomValidity('請輸入專題成員')">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">新增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
