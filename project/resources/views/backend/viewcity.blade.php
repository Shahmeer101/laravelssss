
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
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                     city_Id
                    </th>
                    <th>
                        city_name
                       </th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($city as $item)

                    <tr>
                        <td>{{$item->city_id}}</td>  
                      <td>{{$item->city_naame}}</td>  
                      <td><a href="{{url('editcategory/'.$item->category_id.'/edit')}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i>edit</a>
      <a href="{{url('deletecategory/'.$item->category_id.'/delete')}}" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
     
                    </tr>
                
                    @endforeach  
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 