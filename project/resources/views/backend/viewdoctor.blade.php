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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                        <th>Hire Date</th>
                                        <th>Availability Start</th>
                                        <th>Availability End</th>
                                        <th>Experience</th>
                                        <th>Education</th>
                                        <th>Details</th>
                                        <th>Profile Picture</th>
                                        <th>City</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctor as $item)
                                        <tr>
                                            <td>{{ $item->doctor_id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->date_of_birth }}</td>
                                            <td>{{ $item->hire_date }}</td>
                                            <td>{{ $item->availability_time_start }}</td>
                                            <td>{{ $item->availability_time_end }}</td>
                                            <td>{{ $item->experience }}</td>
                                            <td>{{ $item->education }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td>
                                                @if($item->profile_picture)
                                                    <img src="{{ asset($item->profile_picture) }}" alt="Profile Picture" style="width: 50px; height: 50px; object-fit: cover;">
                                                @else
                                                    <p>No profile picture available.</p>
                                                @endif
                                            </td>
                                            <td>{{ $item->city_id }}</td>
                                            <td>{{ $item->category_id }}</td>
                                            <td>
                                                <a href="{{ url('deleteuser/'.$item->doctor_id.'/delete') }}" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach      
                                </tbody>
                            </table>
                        </div><!-- End table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
