@extends('header')
@section('content')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                       <a href="/emps" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1" style="font-size:15px;">Employee Details</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$emp}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/releivings" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Relieving Letters</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rele}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-shopping-cart fa-2x text-success"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/promotions" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Promotion Letter</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$promo}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-users fa-2x text-info"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/offers" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Offer Letter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$offer}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/experiences" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Experience Letter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$exper}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/industrials" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Industrial Internship Letter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$indus}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/sponsorships" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Sponsership Letter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$spons}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/internships" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Internship Letter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$intern}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="/salaries" style="text-decoration:none;color:grey;">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"  style="font-size:15px;">Salary Receipt</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sal}}</div></a>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Area Chart -->
            
            <!-- Pie Chart -->
           
            <!-- Message From Customer-->
           

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