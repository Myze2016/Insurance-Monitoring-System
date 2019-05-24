<div class="container">
<<<<<<< HEAD

		<h2 class="mt-2 col-12"> Insurance Monitoring System </h2>
		<div class="row input-group">
		<input class="form-control col-9" id="myInput" type="text" placeholder="Search.." name="name">
    <input class="col-3" type="text" class="form-control" id="datepicker" name="maturity">
          <script>
      $( function() {
        $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true,showButtonPanel: true, dateFormat: 'MM yy', onClose: function(dataText, inst){ $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
=======
  <form method="get" class="mt-2" action="<?php echo base_url('list')?>" id="form">
    <style type="text/css">
      #test {
          background-color: red;
      }

      #test button {
           background-color: blue; 
      }

    </style>

    
		<h2 class="mt-2 col-12"> Insurance Monitoring System </h2>
		<div class="row input-group" id="filter">
		<input class="form-control col-9" id="myInput" type="text" placeholder="Search.." name="name">
  
    <input type="text"   class="col-3 form-control" id="datepicker" name="maturity" autocomplete="off">
    <button class="btn button btn-primary" id="button-x"> x </button>
          <script>
      $( function() {
<<<<<<< HEAD
        $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true,showButtonPanel: true, dateFormat: 'MM yy', onClose: function(dataText, inst){ $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
=======
        $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true,showButtonPanel: true, buttonText: 'delete', dateFormat: 'MM yy', onClose: function(dataText, inst){ $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
>>>>>>> 084d25c9888b3f15be14f44055d22951f71fc155
      }
      });
      });
     </script>
<<<<<<< HEAD
     <button id="picker" value="Search" class="btn button btn-primary">Search</button>
		</div>
  <table class="table mt-2">
=======
     
		</div>


  <table class="table mt-2" id="datatable" style="empty-cells: show;">
>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
    <thead class="thead-dark">
      <tr>
        <th>Account Name</th>
        <th>Amount</th>
        <th>Status</th> 
         <th>Maturity</th>
          <th>Branchnumber</th>
           <th>PN</th>
      </tr>
    </thead>
<<<<<<< HEAD
=======
  
>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
    <tbody id="myTable">
      <?php $rowtest=0; ?>
     <?php foreach($users as $user):;?>
      <tr>
      <?php $rowtest=$rowtest+1; ?>
      <td><?php echo $user['account']?></td>
      <td><?php echo $user['amount']?></td>
      <td><?php echo $user['status']?></td>
      <td id="mature" ><?php echo date("y F Y", strtotime($user['maturity']));?></td>
      <td><?php echo $user['branchnumber']?>
      </td>
      <td><?php echo $user['pn']?></td>
      </tr>
<<<<<<< HEAD
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
=======

      <?php endforeach; ?>
      

    </tbody>
    <tfoot>
   
    </tfoot>
  </table>
  <ul class="pagination float-right">
    <?php  
      $x = 1;
      $page = ceil($rowcount / 2);

    ?>
    <?php while($x != $page+1):;?>
      
    <li class="page-item"><input type="submit" name="submit" class="page-link" value="<?php echo $x; ++$x;?>"></input></li>
    <?php endwhile;?>
  <li class="page-item"><a class="page-link">Next</a></li>
</ul>
</form>
</div>        
  


  

>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
<script type="text/javascript">
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
<<<<<<< HEAD


  $(document).ready(function(){
  $("#picker").on("click", function() {

    var value2 = $("#datepicker").val().toLowerCase();
    console.log(value2);


=======
  
   $(document).ready(function(){
  $("#datepicker").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

  $(document).ready(function(){
  $("#ui-datepicker-div").on("click", function() {
    var value2 = $("#datepicker").val().toLowerCase();
>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value2) > 2)
    });
  });
});
<<<<<<< HEAD
=======

   $(document).ready(function(){
  $("#button-x").on("click", function() {
      $('#datepicker').val('')
  });
});


>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
</script>