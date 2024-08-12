@extends('header')
@section('content')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Industrial Internship Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <!-- <li class="breadcrumb-item">Tables</li> -->
              <li class="breadcrumb-item active" aria-current="page">Industrial Internship Details</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Industrial Internship Details</h6>
                </div>
                <div class="table-responsive p-3">
                <a href="{{ route('industrials.create') }}">
    <button type="submit" class="btn btn-primary mb-3">Add Internship</button>
</a>

<table class="table align-items-center table-flush" id="dataTable">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Course Name</th>
            <th>Duration</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Delete</th>
            <th>Update</th>
            <th>Print</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($indust as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->course_name }}</td>
            <td>{{ $i->duration }}</td>
            <td>{{ $i->start_date }}</td>
            <td>{{ $i->end_date }}</td>
            <td>
        
        <form method="post" action="{{route('industrials.destroy',$i->id)}}">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger" style="color:white;">Delete</button>
             </form>
</td>
<td><button type="submit" class="btn btn-primary" ><a href="{{route('industrials.edit',$i->id)}}" style="text-decoration:none; color:white;">Update</td></button>      
<td><button type="submit" class="btn btn-success" ><a href="{{route('industrials.show',$i->empid)}}" style="text-decoration:none; color:white;">Print</td></button>      
            
        @endforeach
        </tr>
    </tbody>
</table>

              </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
            
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
            <!-- <div class="col-lg-12">
              <p>DataTables is a third party plugin that is used to generate the demo table below. For more information
                about DataTables, please visit the official <a href="https://datatables.net/" target="_blank">DataTables
                  documentation.</a></p>
            </div> -->
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      @endsection