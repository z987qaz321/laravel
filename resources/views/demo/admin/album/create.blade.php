@extends('demo.layout.backend.master')
@include('demo.admin.navbar')
@section('title','專題成果展－花絮管理')
@section('content')
<section class="py-5">
    <div class="container zh-font">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3>照片新增</h3>
            </div>
            <div class="card-body">
                <form action="{{route('management_album.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">學年度</label>
                        <select class="form-control" name="year">
                            <option disabled selected>請選擇學年度</option>
                            <option value="105">105</option>
                            <option value="106">106</option>
                            <option value="107">107</option>
                            <option value="108">108</option>
                            <option value="109">109</option>
                            <option value="110">110</option>
                            <option value="111">111</option>
                            <option value="112">112</option>
                            <option value="113">113</option>
                            <option value="114">114</option>
                            <option value="114">115</option>
                            <option value="114">116</option>
                            <option value="114">117</option>
                            <option value="114">118</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">上傳照片</label>
                        <div class="form-group">
                            <input type="file" name="filename" required>
                        </div>
                    </div>
                    <div class="text-center form-group mt-3">
                        <button type="submit" class="btn btn-primary btn-block">新增</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
