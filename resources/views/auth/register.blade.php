@extends('layouts.auth')

@push('css')
    <style>
        body {
            background: url('storage/images/etc/bg-login.jpg');
            background-size: cover;
        }

        .card {
            width: 24rem;
        }
    </style>
@endpush

@section('pages')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-3">
            <a href="{{ route('auth.login') }}"><i class="bi bi-arrow-left"></i> Kembali</a>
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title text-center">Register</h4>
                <form action="" method="post" class="mb-3">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" name="username" id="username" aria-describedby="helpId"
                            placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="Masukkan Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_telp">Nomor Telpon</label>
                        <input type="no_telp" class="form-control" name="no_telp" id="no_telp" aria-describedby="helpId"
                            placeholder="Masukkan Nomor Telpon">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                            placeholder="Masukkan Password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                            placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
                </form>
            </div>
        </div>
    </div>
@endsection
