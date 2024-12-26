@extends('frantend.component.mains')
@section('mains-container')
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{url('frantend/assets/img/logo.png')}}" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  @if ($errors->has('email') || $errors->has('password'))
                  <div class="alert alert-danger">
                      <p>Email or password field is required.</p>
                  </div>
              @endif
              
              <form action="{{ url('add/login') }}" method="POST">
                  @csrf
                  <div class="row gy-3 overflow-hidden">
                      <div class="col-12">
                          <div class="form-floating mb-3">
                              <input 
                                  type="text" 
                                  class="form-control @error('email') is-invalid @enderror"  
                                  name="email" 
                                  id="email" 
                                  placeholder="name@example.com" 
                                  value="{{ old('email') }}"
                              >
                              <label for="email" class="form-label">Email</label>
                              @error('email')
                                  <p class="invalid-feedback">{{ $message }}</p>    
                              @enderror
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating mb-3">
                              <input 
                                  type="password" 
                                  class="form-control @error('password') is-invalid @enderror"  
                                  name="password" 
                                  id="password" 
                                  placeholder="Password">
                              <label for="password" class="form-label">Password</label>
                              @error('password')
                                  <p class="invalid-feedback">{{ $message }}</p>    
                              @enderror
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="d-grid">
                              <button class="$teal-500" type="submit">Log in now</button>
                          </div>
                      </div>
                      <div class="col-12">
                          <p class="small mb-0">
                              Don't have an account? 
                              <a href="{{ url('register') }}">Create an account</a>
                          </p>
                      </div>
                  </div>
              </form>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->
@endsection
  