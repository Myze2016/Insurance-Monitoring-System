  <!DOCTYPE html>
<html lang="en">

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="">AWBS</i>
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
     

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
     <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
     <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">0
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
  

      <!-- Nav Item - Pages Collapse Menu -->
   <!--    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
  <!--     <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
 -->
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
     

         </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <div class="col-3">
            
            <a class="nav-link" href="<?php echo base_url("controller/setup") ;?>">
              <i class="fas fa-fw fa-user-plus"></i>
              <span style="color: gray;">NEW CUSTOMER</span>
            </a>
          </div>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
         <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
 <?php $notificationsrow=0; ?>
                <?php foreach ($notification as $row) {             
                   $notificationsrow++;
                } ;?>
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"> <?php echo $notificationsrow++;?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifications
                </h6>

	
				 <?php foreach ($notification as $row):; ?>

				<form method="get" class="mt-2" action="<?php echo base_url('controller/redirect');?>" id="form3">
				    
                <button type="submit" class="dropdown-item d-flex align-items-center" name="notification-id" href="#" id="notification-button" value="<?php echo $row['insuranceid']?>">
				
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">

					<?php echo $row['account'] . "  ". "has maturity one month before" . "  ".  $row['maturity'];?>
					</span>
                  </div>
				    </form>


      
       </button>
               
			  <form method="get" action="<?php echo base_url('controller/deletenotification');?>" id="form2" >
      <button  type="submit" name="delete" class="float-right btn btn-sm small padding-0"  value="<?php echo $row['id']?>" style="font-size: 10px; padding: 0;" >
      <span aria-hidden="true">delete</span>
      </form>
      </button>
	
				<?php endforeach; ?>
				
				
              </div>
            </li>
			<script>
			$(document).ready(function(){
				$("#notification-button").on("click", function() {
				$('#form3').submit();
				});
			});
			</script>

            <!-- Nav Item - Messages -->
           <!--  <li class="nav-item dropdown no-arrow mx-1">
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
              </div> -->
            </li>

            <div class="topbar-divider d-none d-sm-block">
              
            </div>

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
                <a class="dropdown-item" href="<?php echo base_url('login')?>" data-toggle="modal" data-target="#logoutModal">
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

 <form method="get" class="mt-2" action="<?php echo base_url('filter');?>" id="form">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
             
              <div class="row input-group" id="filter">
                   <input type="text" class="form-control col-9" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2"
    id="myInput" type="text" placeholder="Search.." name="name">
  <select class="form-control" name="account-type">

  <option <?php if ($accounttype=="For Renewal") { echo "selected";};?> >For Renewal</option>
  <option <?php if ($accounttype=="Updated") { echo "selected";};?> >Updated</option>
</select>
                   <input type="text" class="form-control col-3" placeholder="Search" aria-label="Recipient's username" aria-describedby="bfsic-addon2" id="datepicker" name="month" autocomplete="off" value="<?php echo $month; ?>" >
           <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button" id="button-x"> x </button>
      <button class="btn btn-outline-secondary" type="button" id="button-search">Search</button>
    </div>
     
    </div>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true,showButtonPanel: true, dateFormat: 'MM yy', onClose: function(dataText, inst){ $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));}
        });
      });
     </script>
     </form>
            </div>
            <div class="card-body border-left-warning">
              <div class="table-responsive">
                <table class="table table-bordered text-gray-800" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-lg">
                    <tr class="bg-gray-800 text-gray-100">
                      <th>Account Name</th>
                      <th>Amount</th>
                      <th>Status</th> 
                       <th>Maturity</th>
                        <th>Branch</th>
                         <th>PN</th>
                         <th>Actions</th>
                    </tr>
                  </thead>
                    <?php $tableid=0; ?>
                     <tbody id="myTable">
                      <?php foreach($users as $user):;?>
                       
                          <?php $tableid++;?>
                          <tr class="">
  
                             <td><?php echo $user['account']; ?></td>
                             <td><?php echo $user['amount']?></td>
                             <?php if($user['status']=='For Renewal'){
                                $fontcolor='red';
                             }
                             else {
                              $fontcolor='blue';
                             }
                             ?>
                             <td><label style="color: <?php echo $fontcolor; ?>;"><?php echo $user['status']?></label></td>
                              <td id="mature">
                                <form method="get" action="<?php echo base_url('controller/updatedate');?>" id="formupdate">
                                  <input type="hidden" name="hiddenvalue" value="<?php echo $user['id'];?>"></input>
                                <div class="row">
                              <div class="col-lg-8 col-sm-8">
                             <input style="display: none;" class="form-control changepicker-input" value="<?php echo date("d F Y", strtotime($user['maturity']));?>" name="changepicker" id="changepicker<?php echo $tableid; ?>"  placeholder="Maturity Date"  autocomplete="off" />
                            
                            <label style="display: block;"  name="maturity-name" class="maturity-name" id="labelpicker<?php echo $tableid;?>" ><?php echo date("d F Y", strtotime($user['maturity']));?></label>
                          </div>
                          <div class="btn-group col-lg-4 col-sm-4 pl-0 mt-2">
                          <div class="col-6">

                            <button style="display: none;"   name="<?php echo $tableid; ?>"
                            onClick="cancel_click(this.name);return false;"
                            id="danger<?php echo $tableid;?>" class="btn btn-sm  btn-danger "><span class="ui-icon ui-icon-close">cancel</button>
                             <button  onClick="reply_click(this.id);return false;" name="changepicker-button" class="btn btn-sm   btn-primary" id="<?php echo $tableid; ?>"><span class="ui-icon ui-icon-calendar"></span> </button>


                           </div>
                           <div class="col-6">
                              <button type="submit" class="btn btn-sm  btn-primary "><span class="ui-icon ui-icon-check p-0">update</button>
                            </div>

                            </div>
                              </div>
                            </form>
                            </td>
                             <td><?php echo $user['branchnumber']?></td>
                             <td><?php echo $user['part']?></td>
                             <td><button class="btn btn-primary">Manage</button></td>
                          </tr>
                      <?php endforeach; ?>
                      </tbody>
                      
                     <!--  <div class="col-12" style="padding-bottom: 20px;">
                        <a class="nav-link col-2" style="border: 2px solid gray; border-radius: 5px;" href="<?php echo base_url("controller/setup") ;?>"><span style="color: gray;">ADD NEW CUSTOMER</span></a>
                      </div> -->
                </table>

<script>

function reply_click(clicked_id)
{
    var table_id = "changepicker"+clicked_id;
    var label_id = "labelpicker"+clicked_id;
    var danger_id = "danger"+clicked_id;
    document.getElementById(label_id).style.display = "none";
        document.getElementById(clicked_id).style.display = "none";
        document.getElementById(danger_id).style.display = "block";
    document.getElementById(table_id).style.display = "block";
} 

function cancel_click(cancel_id)
{
    var table_id = "changepicker"+cancel_id;
    var label_id = "labelpicker"+cancel_id;
    var danger_id = "danger"+cancel_id;
    document.getElementById(label_id).style.display = "block";
        document.getElementById(cancel_id).style.display = "block";
        document.getElementById(danger_id).style.display = "none";
    document.getElementById(table_id).style.display = "none";
} 

$( function() {
   $( "#changepicker1" ).datepicker({



      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      changeDay: true,
      showButtonPanel: true
      });
 } );

$( function() {
   $( "#changepicker2" ).datepicker({
      dateFormat: 'yy-mm-dd'
      });
 } );



$( function() {
   $( "#changepicker3" ).datepicker({
      dateFormat: 'yy-mm-dd'
      });
 } );



$( function() {
   $( "#changepicker4" ).datepicker({
      dateFormat: 'yy-mm-dd'
      });
 } );

$( function() {
   $( "#changepicker5" ).datepicker({
      dateFormat: 'yy-mm-dd'
      });
 } );








</script>
                <?php $page = ceil($rowcount / 5); ?>
               <ul class="pagination float-right">
    <?php for($x=1;$x<=$page;++$x):;?>
      <input type="hidden" value="<?php echo $currentpage;?>">
    <li class="page-item <?php if ($x==$currentpage){echo "active";}?>"><input type="submit" name="submit-input" class="page-link" value="<?php echo $x; ?>"></input></li>
    <?php endfor;?>
  </ul>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

  <script type="text/javascript">
 
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
 
  $(document).ready(function(){
    $("#button-x").on("click", function() {
      $('#datepicker').val('');
      $('#form').submit();
    });
  });

  $(document).ready(function(){
    $("#button-search").on("click", function() {
      $('#form').submit();
    });
  });

</script>
</body>

</html>
