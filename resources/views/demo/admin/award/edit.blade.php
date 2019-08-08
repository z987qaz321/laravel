@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－得獎名單管理')
@section('content')
<section class="py-5 zh-font">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>得獎名單修改</h3>
            </div>
            <div class="card-body">
                <form action="{{route('management_award.update', $award->awards_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf {{ method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">學年度</label>
                        <select class="form-control" name="year">
                            <option disabled>請選擇學年度</option>
                            <option value="105"
                                @if($award->year == '105')
                                    {{"selected"}}
                                @endif>105
                            </option>
                            <option value="106"
                                @if($award->year == '106')
                                    {{"selected"}}
                                @endif>106
                            </option>
                            <option value="107"
                                @if($award->year == '107')
                                    {{"selected"}}
                                @endif>107
                            </option>
                            <option value="108"
                                @if($award->year == '108')
                                    {{"selected"}}
                                @endif>108
                            </option>
                            <option value="109"
                                @if($award->year == '109')
                                    {{"selected"}}
                                @endif>109
                            </option>
                            <option value="110"
                                @if($award->year == '110')
                                    {{"selected"}}
                                @endif>110
                            </option>
                            <option value="111"
                                @if($award->year == '111')
                                    {{"selected"}}
                                @endif>111
                            </option>
                            <option value="112"
                                @if($award->year == '112')
                                    {{"selected"}}
                                @endif>112
                            </option>
                            <option value="113"
                                @if($award->year == '113')
                                    {{"selected"}}
                                @endif>113
                            </option>
                            <option value="114"
                                @if($award->year == '114')
                                    {{"selected"}}
                                @endif>114
                            </option>
                            <option value="115"
                                @if($award->year == '115')
                                    {{"selected"}}
                                @endif>115
                            </option>
                            <option value="116"
                                @if($award->year == '116')
                                    {{"selected"}}
                                @endif>116
                            </option>
                            <option value="117"
                                @if($award->year == '117')
                                    {{"selected"}}
                                @endif>117
                            </option>
                            <option value="118"
                                @if($award->year == '118')
                                    {{"selected"}}
                                @endif>118
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">已上傳檔案：<strong>{{$award->filename}}</strong></label>
                    </div>
                    <div class="form-group">
                        <label class="form-label">上傳新檔案(覆蓋)</label>
                        <div class="form-group">
                            <input type="file" name="filename" required>
                        </div>
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
