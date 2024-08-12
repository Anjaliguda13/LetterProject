@extends('header')
@section('content')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Promotion Form</h1>
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
                  <form method="post" action="{{route('promotions.update',$user->id)}}">
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
                      <label for="exampleInputEmail1">Promotion Date</label>
                      <input type="date" name="promotion_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Promotion Date"  value="{{$user->promotion_date}}">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Promotion Job Role</label>
                      <input type="text"  name="prole" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Promotion Job Role"  value="{{$user->prole}}">
                     
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Salary(now)</label>
                      <input type="text"  name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Salary"  value="{{$user->salary}}">
                     
                    </div>
                    
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>



            </div>
            
            
          @endsection