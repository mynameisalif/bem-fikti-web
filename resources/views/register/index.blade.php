@extends('layouts.main')
@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
    </section>
<!-- End Breadcrumbs -->
<div class="row justify-content-center min-vh-100">
    <div class="col-md-4 ">
   <main class="form-registration" style="margin-top: 150px">
       <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
       <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Nama</label>
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" requiredvalue="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="Password" placeholder="Password" required>
          <label for="Password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4 " type="submit">Regsiter</button>
      </form>
    <small class="d-block text-center mt-3">Do you have an account? <a href="/login" style="font-size: 12px">Log in</a></small>
    </main>
    </div>
</div>

@endsection
