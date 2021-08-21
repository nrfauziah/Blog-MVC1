@extends('layouts.master')

@section('content')
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="image">GAMBAR</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">JUDUL</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Blog">
                </div>
                <br>
                <div class="form-group">
                    <div><label for="content">CONTENT</label></div>
                    <textarea name="content"></textarea>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="{{ route('datablog') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </form>
@endsection