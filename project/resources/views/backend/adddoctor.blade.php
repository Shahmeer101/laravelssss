@extends('backend.layouts.main')

  <main id="main" class="main">


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <section class="section">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Doctor</h5>
                <div class="container mt-5">
                  <h2 class="text-center mb-4">Add Doctor</h2>

                  <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
      
                    <div class="row">
                      <!-- Doctor Name -->
                      <div class="col-6 mb-3">
                        <label for="name" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Doctor Name" required>
                      </div>
      
                      <!-- Email -->
                      <div class="col-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Doctor Email" required>
                      </div>
                    </div>
      
                    <div class="row">
                      <!-- Phone -->
                      <div class="col-6 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
                      </div>
      
                      <!-- Address -->
                      <div class="col-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                      </div>
                    </div>
      
                    <div class="row">
                      <!-- Date of Birth -->
                      <div class="col-6 mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                      </div>
      
                      <!-- Hire Date -->
                      <div class="col-6 mb-3">
                        <label for="hire_date" class="form-label">Hire Date</label>
                        <input type="date" class="form-control" id="hire_date" name="hire_date" required>
                      </div>
                    </div>
      
                    <div class="row">
                      <!-- Availability Time Start -->
                      <div class="col-6 mb-3">
                        <label for="availability_time_start" class="form-label">Availability Time Start</label>
                        <input type="time" class="form-control" id="availability_time_start" name="availability_time_start" required>
                      </div>
      
                      <!-- Availability Time End -->
                      <div class="col-6 mb-3">
                        <label for="availability_time_end" class="form-label">Availability Time End</label>
                        <input type="time" class="form-control" id="availability_time_end" name="availability_time_end" required>
                      </div>
                    </div>
      
                    <div class="row">
                      <!-- Availability Week -->
                      <div class="col-6 mb-3">
                        <label for="availability_week" class="form-label">Availability Week</label>
                        <input type="text" class="form-control" id="availability_week" name="availability_week" required>
                      </div>
                    
                      <!-- Experience -->
                      <div class="col-6 mb-3">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" class="form-control" id="experience" name="experience" required>
                      </div>
                    </div>
                    
                    <div class="row">
                      <!-- Education -->
                      <div class="col-6 mb-3">
                        <label for="education" class="form-label">Education</label>
                        <input type="text" class="form-control" id="education" name="education" required>
                      </div>
                    
                      <!-- Details -->
                      <div class="col-6 mb-3">
                        <label for="details" class="form-label">Details</label>
                        <input type="text" class="form-control" id="details" name="details" required>
                      </div>
                    </div>
                    
                    <div class="row">
  <!-- City -->
  <div class="col-6 mb-3">
    <label for="city_id" class="form-label">City</label>
    <select class="form-control" id="city_id" name="city_id" required>
      <option value="" disabled selected>Select a City</option>
      @foreach ($cities as $item)
          <option value="{{ $item->city_id }}">{{ $item->city_naame }}</option>
      @endforeach
  </select>
  
  </div>

  <!-- Category -->
  <div class="col-6 mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select class="form-control" id="category_id" name="category_id" required>
      <option value="" disabled selected>Select a Category</option> <!-- Placeholder -->
      @foreach ($categories as $item)
        <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
      @endforeach
    </select>
  </div>
</div>

      
                    <div class="row">
            
                      <div class="col-6 mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <input type="text" class="form-control" id="user_id" name="user_id">
                      </div>

                      <div class="col-6 mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                      </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="row">
                      <div class="col-3">
                        <button type="submit" class="btn btn-primary">Add Doctor</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
  </main><!-- End #main -->

  