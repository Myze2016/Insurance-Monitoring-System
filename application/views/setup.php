<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url("assets/vendor/fontawesome-free/css/all.min.css");?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url("assets/css/sb-admin-2.min.css");?>" rel="stylesheet">


  <style>
  


  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block"><img src="<?php echo base_url("assets/images/undraw_profile_6l1l.svg");?>" width="100%" height="100%" style="background-color: coral"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add New Customer Form</h1>
              </div>  
              <form class="user" method="POST" action="<?php echo base_url('add')?>">
                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="firstname">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Middle Name" name="middlename">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-8 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Last Name" name="lastname">
                  </div>
                  <div class="dropdown col-sm-4">
                        <button class="btn btn-primary dropdown-toggle  btn-user btn-block" type="button" data-toggle="dropdown">Account Type:
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="text-align: center;">
                          <li><a href="#">Residential</a></li>
                          <li><a href="#">Commercial</a></li>
                          <li><a href="#">Institutional</a></li>
                          <li><a href="#">Industrial</a></li>
                        </ul>
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Complete Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-7 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Email Address">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Contact Number">
                    </div>
                    
                </div>
                
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Add Account
                </a>
                
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
