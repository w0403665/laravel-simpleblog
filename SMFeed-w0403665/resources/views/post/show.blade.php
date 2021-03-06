@extends('layouts.app')

@section('content')

    @if (session('message'))
        <div class="alert alert-danger" style="text-align: center" >
            {{ session('message') }}
        </div>
    @endif
    @if (session('confirm'))
        <div class="alert alert-success " style="text-align: center" >
            {{ session('confirm') }}
        </div>
    @endif
    <div class="jumbotron">
        <h1 class="display-4">{{$post->title}}</h1>
        <p class="lead">BY  {{$post->user->name}}        {{$post->updated_at}}</p>
        <hr class="my-4">
        <p>{{$post->content}}</p>
        <p class="lead">
            <a href="/home/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
        </p>
    </div>
@endsection
