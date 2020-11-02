@extends('layouts.auth')
@section('title')
    <title>Masuk</title>
@endsection
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masuk untuk memulai</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if (session('error'))
                    @alert(['type' => 'danger'])
                        {{ session('error') }}
                    @endalert
                @endif
                <div class="form-group has-feedback">
                    <input type="email"
                        name="email" 
                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        placeholder="{{ __('Alamat Email') }}"
                        value="{{ old('email') }}">
                    <span class="fa fa-envelope form-control-feedback"> {{ $errors->first('email') }}</span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" 
                        name="password"
                        class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} " 
                        placeholder="{{ __('Kata Sandi') }}">
                    <span class="fa fa-lock form-control-feedback"> {{ $errors->first('password') }}</span>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Ingat saya') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                    </div>
                </div>
            </form>
            <p class="mb-1">
                <a href="#">Lupa Password</a>
            </p>
            <p class="mb-0">
                <a href="#" class="text-center">Daftar baru</a>
            </p>
        </div>
    </div>
@endsection