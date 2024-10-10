@extends('layouts.layouts')

@section('content')

<section class="py-5" style="margin-top: 100px">
    <div class="container col">

        <div class="d-flex">
            <a href="{{ route('blog') }}">Blog</a>
            <div class="mx-1"> . </div>
            <a href="">Buat Artikel</a>

        </div>
        <h3>Halaman Buat Artikel</h3>
    </div>
</section>
@endsection