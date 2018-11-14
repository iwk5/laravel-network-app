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
                @forelse($posts as $post)
                    <div class="panel">
                        <div class="post-header"><span>Waqas KHan</span><span class="pull-right">{{ $post->created_at->diffForHumans() }}</span></div>
                        <hr>
                        <div class="content">
                            {{ substr($post->content,0, 100) }}
                            <a href="/posts/{{$post->id}}">Read More</a>
                        </div>
                        <div><i class="fa fa-like"></i></div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection