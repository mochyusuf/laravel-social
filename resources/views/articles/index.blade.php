@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($artikels as $artikel)
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{Auth::user()->name}}</span>
                    <span class="pull-right">
                        {{$artikel->created_at->diffForHumans()}}
                    </span>
                </div>

                <div class="panel-body">
                    {{ $artikel->shortContent }}
                    <a href="/articles/{{$artikel->id}}">Read More</a>
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
            {{$artikels->links()}}
        </div>
    </div>
@endsection