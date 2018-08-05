@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Article
            </div>
            <div class="panel-body">
            <form action="/articles/{{$article->id}}" method="POST">

                    {{ method_field('PUT')}}
                    {{ csrf_field() }}

                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                    <div class="form-group">
                        <label for="">Content</label>

                    <textarea name="content" class="form-control" id="" cols="30" rows="10">{{$article->content}}</textarea>
                    </div>

                    <div class="checkbox">
                        <label for=""><input type="checkbox" name="live" id="" {{$article->live == 1 ? 'checked' : '' }}>Live</label>
                    </div>

                    <div class="form-group">
                        <label for="">Post on</label>

                    <input type="datetime-local" name="posts_on" class="form-control" id="" value="{{$article->posts_on->format('Y-m-d\TH:i:s')}}">
                    </div>

                    <input type="submit" class="btn btn-success pull-right" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection