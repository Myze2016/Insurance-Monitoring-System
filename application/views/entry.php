<!DOCTYPE html>
<html lang="en">

<head>

  

  <title>Add Loan</title>

  <!-- Custom fonts for this tem plate-->
 

  <!-- Custom styles for this template-->
  

    
   
    
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i>AWBS</i>
        </div>
        <div class="sidebar-brand-text mx-3"><sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("entry") ;?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="buttons.html"></a>
            <a class="collapse-item" href="cards.html"></a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span></span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="utilities-color.html"></a>
            <a class="collapse-item" href="utilities-border.html"></a>
            <a class="collapse-item" href="utilities-animation.html"></a>
            <a class="collapse-item" href="utilities-other.html"></a>
          </div>
        </div>
      </li>

      <!-- Divider -->
   

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    <!--   <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span></span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="login.html"></a>
            <a class="collapse-item" href="register.html"></a>
            <a class="collapse-item" href="forgot-password.html"></a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="404.html"></a>
            <a class="collapse-item active" href="blank.html"></a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span></span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("controller/filter") ;?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Customers</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
     <!--  <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("controller/entry") ;?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Billing</span></a>
      </li>
      <!-- Divider -->
  

     
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
         
                <span class="badge badge-danger badge-counter"></span>
              </a>
          
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- 
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
            
                <span class="badge badge-danger badge-counter">7</span>
              </a>
            
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div> -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                <img class="img-profile rounded-circle" src="<?php echo base_url("assets/images/man.png") ;?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="col-12 form">
    
          <h1 class="h3 mb-4 text-gray-800 border-bottom-warning pb-4">Add Payment </h1>
          </div>
             <form class="justify-content-center p-2" method="POST" action="<?php echo base_url('save')?>" id="form">
                 
                 <div class="row col-6 offset-md-3">
                     <div class="form-group col-12 form-control-user">
                        <input type="text" class="form-control" id="account" name="account" placeholder="Account Number">
                         <label id="account-error" class="small invalid-tooltip"> </label>  
                    </div>
                    
                      <script type="text/javascript">

                          var base_url = window.location.origin;
                          console.log( base_url + "/project/controller/autocomplete");
                         $( function() {
                          $( "#account" ).autocomplete({
                            source: base_url + "/project/controller/autocomplete",
                            });
                          } );
                      </script>
                  
                 
                    
                     <!-- <div class="form-group col-6">
                         
                            <select class="form-control form-control-user text-gray-700" id="branch" name="branchid">
                                <option value="" selected disabled>Branch</option>
                                <?php foreach($branch as $branches): ;?>
                                    <option name="branchid" value="<?php echo $branches['id']?>"><?php echo $branches['branchnumber']?></option>
                                <?php endforeach;?>
                            </select>
                            <label id="branch-error" class="small invalid-tooltip"> </label>
                    
                    </div> -->
                    
                    <!-- <div class="form-group col-6">
                         <input type="text" class="form-control form-control-user"  id="part" name="pnid" placeholder="Part Number"/>
                        <select type="text" class="form-control" id="part" name="pnid" placeholder="Part Number">
                            <option value="" selected disabled>Part Number</option>
                                <?php foreach($part as $parts): ;?>
                                <option  value="<?php echo $parts['id']?>"> <?php echo $parts['pn']?> </option>
                                <?php endforeach;?>
                        </select> 
                        <label id="part-error" class="small invalid-tooltip">  </label>
                    </div> -->
                    
                    
                 </div>
                 
                 
                <div class="row col-6 offset-3">
                    <div class=" form-group col-12 text-center">
                        <input type="text" class="form-control form-control-user" id="amount" placeholder="Payment Amount" name="amount"/>
                        <label id="amount-error" class="small invalid-tooltip"></label>
                        </div>
                        <!--  <div class="col-12 form-group text-center"> 
                            <p class="col-12">
                            <label class="ml-3" for="12months">12months</label>
                            <input type="radio" name="radio" value="option1" id="12months">
                            <label class="ml-3" for="24months">24months</label>
                            <input type="radio" name="radio" value="option2" id="24months">
                            <label class="ml-3" for="36months">36months</label>
                            <input type="radio" name="radio" value="option3" id="36months"></p>
                        </div> -->
                    <div class="form-group col-12">
                        <input class="form-control form-control-user" id="datepicker" width="100%" placeholder="Date" name="maturity" autocomplete="off" />
                        <label  id="maturity-error" class="small invalid-tooltip"> </label>
                     <script>
                          $( function() {
                            $( "#datepicker" ).datepicker({
                              dateFormat: 'yy-mm-dd'
                            });
                          } );
                     </script>
                    </div>
                    
                </div>
                 
                
                    
                <div class="row col-6 offset-3 form-group">
                    <p class="col-12 text-center"><input class="btn btn-outline-primary mr-3 col-3" type="submit" value="Submit">
                    <a href="<?php echo base_url('filter'); ?>" class="btn btn-outline-danger col-3">Return </a></p>
                 </div>
                 
                <div class="row col-6 offset-3" style="display: none;" id="success">
                    <div class="alert alert-success col-12 text-center p-2 " id="succes-message">
                        <strong>Loan added successfully!</strong>
                    </div>
                    <p class="pt-3 text-center col-12" ><img src="<?php echo base_url("assets/images/undraw_confirmation_2uy0.svg");?>" width="70%" height="70%"></p>
                
                </div>
                 
            
                 
            </form>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary"  type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


 <script> 

  $('input[name="radio"]').on('change', function(){
     var radioValue = $("input[name='radio']:checked").val();
     var d = new Date();
     if(radioValue=='option1'){
      var x = 12; //or whatever offset
      var CurrentDate = new Date();
      CurrentDate.setMonth(CurrentDate.getMonth() + x);
      document.getElementById("datepicker").value = CurrentDate.getFullYear() + "-" + CurrentDate.getMonth() + 
      "-" + CurrentDate.getDate() ;

     }
     if(radioValue=='option2'){
       var x = 24; //or whatever offset
      var CurrentDate = new Date();
      CurrentDate.setMonth(CurrentDate.getMonth() + x);
      document.getElementById("datepicker").value = CurrentDate.getFullYear() + "-" + CurrentDate.getMonth() + 
      "-" + CurrentDate.getDate() ;
     }
    if(radioValue=='option3'){
        var x = 36; //or whatever offset
      var CurrentDate = new Date();
      CurrentDate.setMonth(CurrentDate.getMonth() + x);
      document.getElementById("datepicker").value = CurrentDate.getFullYear() + "-" + CurrentDate.getMonth() + 
      "-" + CurrentDate.getDate() ;
     }
  });

  $(document).on('click','body *',function(){
    document.getElementById("branch-error").style.display = "none";
    document.getElementById("part-error").style.display = "none";
    document.getElementById("account-error").style.display = "none";
    document.getElementById("amount-error").style.display = "none";
    document.getElementById("maturity-error").style.display = "none";
    $("#amount").removeClass("is-invalid");
    $("#account").removeClass("is-invalid");
    $("#datepicker").removeClass("is-invalid");
    $("#branch").removeClass("is-invalid");
    $("#part").removeClass("is-invalid");
  });

 

   $(document).ready(function(){
     $('#form').submit(function(e){
      e.preventDefault();
      var url  = $(this).attr('action');
      $.ajax({
        url : url,
        method: 'POST',
        data : $(this).serialize(),
        success: function(res){
           document.getElementById("success").style.display = "block";
        },
        error: function(err){
          var errors  =  JSON.parse(err.responseText);

          if(errors.account!="") {
            $("#account").addClass("is-invalid");
            document.getElementById("account-error").innerHTML=errors.account;
            document.getElementById("account-error").style.display = "block";
          }
          if (errors.part!=""){
            $("#part").addClass("is-invalid");
            document.getElementById("part-error").innerHTML = errors.part;
            document.getElementById("part-error").style.display = "block";
          }
         if(errors.maturity!="") {
            $("#datepicker").addClass("is-invalid");
            document.getElementById("maturity-error").innerHTML = errors.maturity;
            document.getElementById("maturity-error").style.display = "block";
          }
          if(errors.amount!="") {
             $("#amount").addClass("is-invalid");
             document.getElementById("amount-error").innerHTML = errors.amount;
             document.getElementById("amount-error").style.display = "block";
          }
          if(errors.part!="") {
            $("#branch").addClass("is-invalid");
            document.getElementById("branch-error").innerHTML = errors.branch;
            document.getElementById("branch-error").style.display = "block";
          }
        }
      })
      
    })

  })
</script>

</body>

</html>
