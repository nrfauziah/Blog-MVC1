@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mt-3">
                            <h1 class="mb-3">Tabel Blog</h1>

                            <a href="{{ route('blog.create') }}"><button class="btn btn-sm btn-primary mb-3">[+] Tambah Blog </button></a>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Content</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($blogs as $blog)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ url('/img/'.$blog->image) }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $blog->title}}</td>
                                            <td>{!! $blog->content !!}</td>
                                            <td class="text-center">
                                                <form action="{{ route('blog.destroy', $blog->id) }}" onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                                <a href="{{ route('blog.edit', $blog->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Blog Belum Tersedia
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection