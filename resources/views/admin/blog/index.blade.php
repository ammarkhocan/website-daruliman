@extends('layouts.layouts')

@section('content')

<section class="py-5" style="margin-top: 100px">
    <div class="container col">
        <h3>Halaman Blog Artikel</h3>

        <a href="{{ route('blog.create') }}" class="btn btn-primary">Buat Artikel</a>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
@endsection