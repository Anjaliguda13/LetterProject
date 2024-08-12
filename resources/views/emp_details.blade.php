@extends('header')
@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employee Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Employee Details</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Basic Data Form </h6>
                </div>
                <div class="card-body">
                  <form action="/store" method="post" enctype="multipart/form-data">
                  @csrf
                    <!-- <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="empid">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Name" name="name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Email Address</label>
                      <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter Email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Address</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Enter Address" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Mobile Number</label>
                      <input type="tel" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Enter Mobile Number" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Date of Birth</label>
                      <input type="date" class="form-control" id="exampleInputPassword1" name="dob" placeholder="Enter DOB" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                   </select>
                    </div>
                    <div class="form-group">
                    <label for="documents">Documents</label>
                    <select id="documents" name="documents[]" class="documents" multiple required>
            <option value="Aadhar Card">Aadhar Card</option>
            <option value="Pan Card">Pan Card </option>
            <option value="Bank Book">Bank Book</option>
            <!-- Add more options as needed -->
        </select>
                    </div>
                    <div class="form-group">
                    <label for="status">Marital Status</label>
                    <select id="status" name="status" required>
            <option value="married">Married</option>
            <option value="unmarried">Unmarried</option>
        </select>
                    </div>
                    <div class="form-group">
                    <label for="previous_company">Previous Company:</label>
        <input type="text" id="previous_company" name="previous_company" class="form-control" id="exampleInputPassword1" placeholder="Previous_company">
     
                    </div>
                    <div class="form-group">
                    <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Previous_company">
     
                    </div>

                    
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
                    <button type="submit" class="btn btn-primary" id="btn">Submit</button>
                  </form>
                </div>
              </div>
            <!--  -->
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
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function(){
        $("#btn").on("click",function(){
            var documents=$(".documents").val();
         
            var datavalue={
                'documents':documents,
                
            }
            $.ajax({
                url:'api/storedocuments',
                method:'post', 
                data:datavalue, 
                success:function(data){
                    //window.location.href="demo.php";
                    var data=JSON.parse(data);
                    console.log(data.status);   
                    if(data.status=='success')
                    {
                        alert(data.msg);
                    }

                },
                error:function(data)
                {
                    console.log(data);
                }
            })
            
        });
    });             
</script>
</body>
</html>
