@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px;">
    <div class="container py-5 col-xxl-6">
        <h3 class="fw-bold mb-3">Halaman Login Admin Pesantren</h3>

        <form action="" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Masukkan Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Masukkan Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div> 
</section>

    
@endsection