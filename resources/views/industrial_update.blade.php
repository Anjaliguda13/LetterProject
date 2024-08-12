@extends('header')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Industrial Internship Form</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Industrial Internship Form</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Industrial Internship Form</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('industrials.update',$user->id)}}">
                    @csrf 
                    @method('PATCH')
                  <div class="form-group">
            <label for="exampleFormControlSelect1">Select Employee</label>
            <select class="form-control" id="exampleFormControlSelect1" name="empid" >
            <option>Select Employee</option>
                @foreach($empdata as $emp)
                    <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                @endforeach
            </select>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Name:</label>
                      <input type="text" class="form-control" placeholder="Enter Course Name" name="course_name" value="{{$user->course_name}}">
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Duration:</label>
                        <input type="text" class="form-control" placeholder="Enter The Duration" name="duration" value="{{$user->duration}}">
                        
                      </div>
                    <div class="form-group" id="simple-date4">
                        <label for="dateRangePicker">Start Date & End Date:</label>
                        <div class="input-daterange input-group">
                          <input type="date" class="input-sm form-control" name="start_date" value="{{$user->start_date}}" />
                          <div class="input-group-prepend">
                            <span class="input-group-text">to</span>
                          </div>
                          <input type="date" class="input-sm form-control" name="end_date" value="{{$user->end_date}}" />
                        </div>
                      </div>
                    
                     
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

              
            </div>
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
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
    @endsection