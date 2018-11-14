@extends('layouts.app')
<style>
    .pull-right{
        float: right;
    }
    .panel{
        width: 50%;
        float: none;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        margin-bottom: 10px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <div class="panel">
                        <div class="post-header"><span>Post by Waqas KHan</span><span class="pull-right">{{ $post->created_at->diffForHumans() }}</span><a href="/posts/{{$post->id}}/edit"> edit</a></div>
                        <hr>
                        <div class="content">
                            {!! $post->content !!}
                        </div>
                        <div><i class="fa fa-like"></i></div>
                    </div>
            </div>
        </div>
    </div>
@endsection