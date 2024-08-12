@extends('header')
@section('content')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Report Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <!-- <li class="breadcrumb-item">Tables</li> -->
              <li class="breadcrumb-item active" aria-current="page">Report Details</li>
            </ol>
          </div>
          


             <!-- Row -->
             <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Report Details</h6>
                </div>
                <form action="/empsearch" method="GET" >
                    <lable for="search" style="margin-left:1000px;color:black;">Search here</lable>
 <input type="text" name="name" id="name" placeholder=" Employee name" onchange="searchEmployees()"style="margin-left:1000px;">
</form> 
                <div class="table-responsive p-3">


<table class="table align-items-center table-flush">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
          
            
        
        </tr>
    </thead>
    <tbody>
    <div id="searchResults">
      
    @foreach ($employees as $employee)
    
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <tr>
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
            Relieving Letter</p>
              <center><button style="border:none;border-radius:5px;" ><a href="{{route('releivings.show',$employee->id)}}" style="text-decoration:none;color:blue;">Print</a></button></center><br>
            <div></td>
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
            Promotion Letter</p>
              <center><button style="border:none;border-radius:5px;" ><a href="{{route('promotions.show',$employee->id)}}" style="text-decoration:none;color:blue;">Print</a></button></center><br>
            <div></td>
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
            Offer <br>Letter</p>
              <center><button style="border:none;border-radius:5px;"><a href="{{route('offers.show',$employee->id)}}" style="text-decoration:none;color:blue;">Print</a></button></center><br>
            <div></td>
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
            Experience Letter</p>
              <center><button style="border:none;border-radius:5px;"><a href="{{route('experiences.show',$employee->id)}}" style="text-decoration:none;color:blue;">Print</a></button></center><br>
            <div></td>
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
            Industrial Internship </p>
              <center><button style="border:none;border-radius:5px;"><a href="{{route('industrials.show',$employee->id)}}" style="text-decoration:none;color:blue;">Print</a></button></center><br>
            <div></td>
            
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
            Internship Letter</p>
              <center><button style="border:none;border-radius:5px;"><a href="{{route('internships.show',$employee->id)}}"style="text-decoration:none;color:blue;">Print</a></button></center><br>
            <div></td>
            <td><div class="abc"  style="hight: 100px;width:100px;background-color:lightgrey;border-radius:10px;">
            <p style="color:Black;text-align:center;">
           Salary Receipt</p>
              <center><button style="border:none;border-radius:5px;"><a href="{{route('salaries.show',$employee->id)}}" style="text-decoration:none;color:blue;">Print</a> </button></center><br>
            <div></td>
              <tr>
            
           
    @endforeach
</div>
    </tbody>
</table>

              </div>
              </div>
            </div>
</div>

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
   
<script>
    function searchEmployees() {
        var name = document.getElementById('name').value;
        if (name.trim() !== '') { // Only perform search if the name is not empty
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/empsearch?name=' + name, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('searchResults').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        } else {
            document.getElementById('searchResults').innerHTML = ''; // Clear the results if the name is empty
        }
    }
</script>
@endsection