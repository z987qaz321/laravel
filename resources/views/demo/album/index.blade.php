@extends('demo.layout.frontend.master')
@section('title','專題成果展－活動花絮')
@section('nav_album','active')
@section('content')
<section class="py-5">
    <div class="container">
        <h1>Photo</h1>
        <hr>
    </div>
    <div class="container zh-font">
        <div class="row text-center text-lg-left">
            @foreach ($albums as $album)
            <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="{{asset('./uploads')}}/{{$album->filename}}" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{asset('./uploads')}}/{{$album->filename}}" >
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
