@extends('backend.layouts.main')

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              {{-- <form action="{{ route('admin.addcategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="c_name">Category Name:</label>
                <input type="text" name="c_name" id="c_name" required>
            
                <label for="c_desc">Category Description:</label>
                <textarea name="c_desc" id="c_desc" required></textarea>
            
                <label for="image">Category Image:</label>
                <input type="file" name="image" id="image" accept="image/*">
            
                <button type="submit">Add Category</button>
            </form> --}}
            
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('admin.addcategory') }}" method="post" enctype="multipart/form-data">
                @csrf
            
                <!-- Name Field -->
                <div class="col-12">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" name="c_name" class="form-control" id="c_name" value="{{ old('c_name') }}">
               
                </div>
            
                <!-- Email Field -->
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Category Description</label>
                    <input type="text" name="c_desc" class="form-control" id="c_desc" value="{{ old('c_desc') }}">
                
                </div>
            
            
                <!-- Profile Picture Upload -->
                <div class="col-12">
                    <label for="file" class="form-label">Profile Picture</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">

                    @error('image')
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

  