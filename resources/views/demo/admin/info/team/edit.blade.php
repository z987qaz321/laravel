@extends('demo.layout.backend.master')
    @include('demo.admin.navbar')
@section('title','專題成果展－專題組別管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>專題組別資訊修改</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('team.update', $team->teams_id) }}" method="POST">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">專題組別帳號</label>
                        <input type="text" name="account_team" class="form-control" value="{{ $account->account }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">指導老師帳號</label>
                        <input type="text" name="account_teacher" class="form-control" value="{{ $account_teacher->account }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題編號</label>
                        <input type="text" name="team_number" class="form-control" value="{{ $team->team_number }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題名稱</label>
                        <input type="text" name="team_name" class="form-control" value="{{ $team->team_name }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題領域</label>
                        <select class="form-control" name="team_field">
                            <option disabled>請選擇專題領域</option>
                            <option value="企業e化"
                                @if($team->team_field == '企業e化')
                                    {{"selected"}}
                                @endif>企業e化
                            </option>
                            <option value="數位內容與多媒體應用"
                                @if($team->team_field == '數位內容與多媒體應用')
                                    {{"selected"}}
                                @endif>數位內容與多媒體應用
                            </option>
                            <option value="網路應用與資通安全"
                                @if($team->team_field == '網路應用與資通安全')
                                    {{"selected"}}
                                @endif>網路應用與資通安全
                            </option>
                            <option value="嵌入式系統與行動計算"
                                @if($team->team_field == '嵌入式系統與行動計算')
                                    {{"selected"}}
                                @endif>嵌入式系統與行動計算
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題分類</label>
                        <select class="form-control" name="team_category">
                            <option disabled>請選擇專題分類</option>
                            <option value="網路匯流"
                                @if($team->team_category == '網路匯流')
                                    {{"selected"}}
                                @endif>網路匯流
                            </option>
                            <option value="人機互動"
                                @if($team->team_category == '人機互動')
                                    {{"selected"}}
                                @endif>人機互動
                            </option>
                            <option value="感知環境"
                                @if($team->team_category == '感知環境')
                                    {{"selected"}}
                                @endif>感知環境
                            </option>
                            <option value="創新服務"
                                @if($team->team_category == '創新服務')
                                    {{"selected"}}
                                @endif>創新服務
                            </option>
                            <option value="安全信賴"
                                @if($team->team_category == '安全信賴')
                                    {{"selected"}}
                                @endif>安全信賴
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">學制</label>
                        <select class="form-control" name="education">
                            <option disabled>請選擇學制</option>
                            <option value="五專部"
                                @if($team->education=='五專部')
                                    {{"selected"}}
                                @endif>五專部
                            </option>
                            <option value="大學部"
                                @if($team->education=='大學部')
                                    {{"selected"}}
                                @endif>大學部
                            </option>
                            <option value="研究所"
                                @if($team->education=='研究所')
                                    {{"selected"}}
                                @endif>研究所
                            </option>
                            <option value="進修部"
                                @if($team->education=='進修部')
                                    {{"selected"}}
                                @endif>進修部
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">班級</label>
                        <select class="form-control" name="class">
                            <option disabled>請選擇班級</option>
                            <option value="資管五甲"
                                @if($team->class=='資管五甲')
                                    {{"selected"}}
                                @endif>資管五甲
                            </option>
                            <option value="資管四1"
                                @if($team->class=='資管四1')
                                    {{"selected"}}
                                @endif>資管四1
                            </option>
                            <option value="資管四2"
                                @if($team->class=='資管四2')
                                    {{"selected"}}
                                @endif>資管四2
                            </option>
                            <option value="資管四A"
                                @if($team->class=='資管四A')
                                    {{"selected"}}
                                @endif>資管四A
                            </option>
                            <option value="資工四1"
                                @if($team->class=='資工四1')
                                    {{"selected"}}
                                @endif>資工四1
                            </option>
                            <option value="資管碩二"
                                @if($team->class=='資管碩二')
                                    {{"selected"}}
                                @endif>資管碩二
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">專題成員</label>
                        <input type="text" name="member" class="form-control" value="{{ $team->member }}">
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
