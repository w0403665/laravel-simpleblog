@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-danger" style="color: red" >
            {{ session('message') }}
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>
                <div class="card-body">
                    <form action="/posts" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                            <small id="titleHelp" class="form-text text-muted">Give your post a title.</small>
                        </div>
                        @error('title')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="20"></textarea>
                            <small id="contentHelp" class="form-text text-muted">Giving a content.</small>
                            @error('content')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                            <input name="created_by" type="hidden" id="created_by" value="{{Auth::user()->id}}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg" aria-pressed="true">Submit</button>
                        <a href="/home/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

