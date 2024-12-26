@extends('backend.layouts.main')

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add city</h5>

          
              <form class="row g-3" action="{{ url('addcity') }}" method="post">
                @csrf 
                
               
                <div class="col-12">
                    <label for="" class="form-label">City</label>
                    <input type="text" name="city_name" class="form-control" id="city_name" value="{{ old('city_type') }}">
                </div>
                
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

  

  