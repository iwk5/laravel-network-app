@extends('layouts.app')
<style>
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <form action="/posts" method="post">
                    {{ csrf_field() }}
                    <h4>Post Something!</h4>
                    <div class="form-group">
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary pull-right" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection