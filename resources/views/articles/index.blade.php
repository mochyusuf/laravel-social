@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($articles as $article)
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{Auth::user()->name}}</span>
                    <span class="pull-right">
                        {{$article->created_at->diffForHumans()}}
                    </span>
                </div>

                <div class="panel-body">
                    {{$article->content}}
                </div>

                <div class="panel-footer">
                    <i class="fa fa-heart pull-right clearfix"></i>
                </div>
            </div>
        </div>
        @empty
            No Articles.
        @endforelse
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$articles->links()}}
        </div>
    </div>
@endsection