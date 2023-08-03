@extends('layouts.main')
@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
    </section>
<!-- End Breadcrumbs -->
<div class="row justify-content-center min-vh-100">
    <div class="col-md-4 ">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
   <main class="form-signin"style="margin-top: 150px">
       <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
       <form action="/login" method="post">
        @csrf
       <div class="form-floating">
         <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required>
         <label for="username">Username</label>
         @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
       </div>
       <div class="form-floating">
         <input type="password" name="password" class="form-control rounded-bottom " id="Password" placeholder="Password" required>
         <label for="Password">Password</label>
       </div>
       <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
     </form>
    <small class="d-block text-center mt-3">Not registed? <a href="/register" style="font-size: 12px">Register now</a></small>
    </main>
    </div>
</div>

@endsection
