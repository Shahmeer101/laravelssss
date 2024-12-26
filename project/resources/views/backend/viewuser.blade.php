
@extends('backend.layouts.main')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                    <th>Email</th>
                    <th>password</th>
                    <th >profile-picture</th>
                    <th>role-id</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

  @foreach ($user as $item)
      <tr>
      <td>{{ $item->user_id }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->password }}</td>
      <td>
        @if($item->profile_picture)
        <img src="{{ asset($item->profile_picture) }}" alt="Profile Picture" style="width: 50px; height: 50px; object-fit: cover;">
    @else
        <p>No profile picture available.</p>
    @endif
      </td>
      <td>{{ $item->role_id }}</td>

      {{-- <td><a href="{{url('edituser/'.$item->user_id.'/edit')}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i>edit</a></td> --}}
      <td><a href="{{url('deleteuser/'.$item->user_id.'/delete')}}" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
     
  </tr>
  @endforeach      
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->



  {{-- $table->increments('user_id');
  $table->string('name');
  $table->string('email')->unique();
  $table->string('password');
  $table->string('profile_picture');
  $table->unsignedInteger('role_id')->default(3); 
  $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');
  $table->timestamps(); --}}
 

  {{-- Schema::create('roles', function (Blueprint $table) {
    $table->increments('role_id');
    $table->string('role_type');
    $table->timestamps();
}); --}}