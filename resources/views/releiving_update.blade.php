@extends('header')
@section('content')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Releiving Form</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
          <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                <form action="{{route('releivings.update',$user->id)}}" method="post" >
                  @csrf
                  @method('PATCH');
                          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Employee</label>
            <select class="form-control" id="exampleFormControlSelect1" name="empid" value="{{$user->empid}}">
            <option>Select Employee</option>
                @foreach($empdata as $emp)
                 
                    <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                @endforeach
            </select>
        </div>
              <div class="form-group">
                      <label for="exampleInputEmail1">Resign Date</label>
                      <input type="date" name="resign_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Resign Date" value="{{$user->resign_date}}" >
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Relieve Date</label>
                      <input type="date"  name="relieve_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Relieve Date" value="{{$user->relieve_date}}" >
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Job Role</label>
                      <input type="text"  name="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Job Role" value="{{$user->role}}" >
                     
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
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
      <!-- Footer -->
     @endsection