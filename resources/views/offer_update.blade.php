@extends('header')
@section('content')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Offer Form</h1>
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
                  <form method="post" action="{{route('offers.update',$user->id)}}">
                    @csrf
                    @method('PATCH');
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
                      <label for="exampleInputEmail1"> Job Role</label>
                      <input type="text"  name="offer_role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter  Job Role" value="{{$user->offer_role}}">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Start Date</label>
                      <input type="date" name="start_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Promotion Date" value="{{$user->start_date}}">
                     
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Start Salary</label>
                      <input type="text"  name="start_salary"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Start Salary" value="{{$user->start_salary}}">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gross Salary</label>
                      <input type="text"  name="gross_salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Gross Salary" value="{{$user->gross_salary}}">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Acceptance Last Date</label>
                      <input type="date" name="last_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Acceptance Last Date" value="{{$user->last_date}}">
                     
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>



            </div>
            
            
                  
          <!--Row-->

         

   
      <!-- Footer -->
      @endsection