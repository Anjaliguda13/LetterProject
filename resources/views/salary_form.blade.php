@extends('header')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Salary Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Salary</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Salary Details</h6>
                </div>
                <div class="card-body">
                <form action="/sstore" method="post" >
                  @csrf
                          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Employee</label>
            <select class="form-control" id="exampleFormControlSelect1" name="empid">
            <option>Select Employee</option>
                @foreach($empdata as $emp)
                    <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                @endforeach
            </select>
                </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Designation</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Designation" name="design" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Basic Salary</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="basic_sal" placeholder="Enter Basic Salary" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter TDS + Professional Tax </label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="tax" placeholder="Enter tax" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="salmode">
                        <option value="bank">Bank</option>
                        <option value="cash">cash</option>
                      </select>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword1">Enter Mobile Number</label>
                      <input type="tel" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Enter Mobile Number" autocomplete="off" required>
                    </div> -->
                    <!-- <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div> -->
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            <!--  -->
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <!-- <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div> -->

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