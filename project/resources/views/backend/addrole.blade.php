@extends('backend.layouts.main')

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">add role</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="{{ url('addrole') }}" method="post">
                @csrf <!-- CSRF token for security -->
                
                <div class="col-12">
                    <label for="role_id" class="form-label">Role ID</label>
                    <input type="text" name="role_id" class="form-control" id="role_id" value="{{ old('role_id') }}">
                </div>
                
                <div class="col-12">
                    <label for="" class="form-label">Role Type</label>
                    <input type="text" name="role_name" class="form-control" id="role_name" value="{{ old('role_type') }}">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <a href="{{url('addrole/view')}}">view</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  

  