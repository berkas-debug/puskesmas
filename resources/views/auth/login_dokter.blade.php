@extends('layouts.index_layouts')

@section('content')
<div class="batas">

    <form method="POST" action="{{ route('login') }}">
      @csrf
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label class="form-label" for="email">Email address</label>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <label class="form-label" for="password">Password</label>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            
          </div>
      
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">
          {{ __('Login') }}
        </button>
      
        <!-- Register buttons -->
        <div class="text-center">
          {{-- <p>Not a member? <a href="#!">Register</a></p> --}}
        </div>
      </form>
</div>
@endsection