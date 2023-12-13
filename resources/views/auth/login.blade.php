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
            <a href="{{ route('home') }}"><i class="bi bi-arrow-left"></i> Kembali</a>
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title text-center">Login</h4>
                <form action="{{ route('auth.loginProccess') }}" method="post" class="mb-3">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="Masukkan Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                            placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <p class="text-center">Belum punya akun? <a href="{{ route('auth.register') }}">Register</a></p>
            </div>
        </div>
    </div>
@endsection
