@extends('auth.layout')
@section('content')
<section class="form-login">
    <div class="container">
            <div class="content-login">
            <div class="card mx-auto" style="width: 19rem;">
                <div class="card-body mx-auto">
                    <h3 class="text-center">Login</h3>
                    <form action="/dashboard-admin/login" method="post">
                        @csrf
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input @error('no_karyawan') uk-form-danger @enderror" name="no_karyawan" type="text" placeholder="ID Karyawan" autofocus>
                            </div>
                            @if(session()->has('loginError'))
                            <p class="text-danger" style="font-size: 10px;">
                                {{ session('loginError') }}
                            </p>
                            @endif
                            @error('no_karyawan')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="password" type="password" placeholder="Password" required>
                            </div>
                        </div>
                        <p>Need an <a href="/dashboard-admin/register">account</a>?</p>
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection