@extends('layouts.index_layouts')

@section('content')
<style>
    .register-container {
        max-width: 500px;
        margin: 70px auto;
        padding: 25px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    .register-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .invalid-feedback {
        color: red;
        font-size: 0.875em;
        margin-top: 5px;
    }

    .submit-btn {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        font-weight: bold;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="register-container">
    <h2>Daftar Pasien</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Hidden Role -->
        <input type="hidden" name="role" value="pasien">

        <!-- Name -->
        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" required autocomplete="name" autofocus>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" required autocomplete="email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password-confirm">Konfirmasi Password</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Submit -->
        <button type="submit" class="submit-btn">{{ __('Register') }}</button>
    </form>
</div>
@endsection
