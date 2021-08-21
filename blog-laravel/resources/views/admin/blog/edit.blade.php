@extends('layouts.master')

@section('content')
    <form action="{{ route('blog.update', $blogs->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="image">GAMBAR</label>
                    <input id="image" type="file" class="form-control" name="image" value="{{$blogs->image}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">JUDUL</label>
                    <input id="title" type="text" class="form-control" name="title" value="{{$blogs->title}}">
                </div>
                <br>
                <div class="form-group">
                    <div><label for="content">CONTENT</label></div>
                    <textarea name="content" value="{{$blogs->content}}"></textarea>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection