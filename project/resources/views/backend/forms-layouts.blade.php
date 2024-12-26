@extends('backend.layouts.main')

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('admin.adduser') }}" method="post" enctype="multipart/form-data">
                @csrf
            
                <!-- Name Field -->
                <div class="col-12">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="inputName" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Email Field -->
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Password Field -->
                <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Profile Picture Upload -->
                <div class="col-12">
                    <label for="file" class="form-label">Profile Picture</label>
                    <input type="file" name="image" class="form-control" id="file">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Role Selection -->
                <div class="col-12">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control">
                        @foreach ($roles as $items)
                            <option value="{{ $items->role_id }}">{{ $items->role_type }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Submit Button -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  