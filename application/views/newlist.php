<div class="container">
  <form method="get" class="mt-2" action="<?php echo base_url('controller/filter')?>" id="form">
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
    <input type="text"   class="col-3 form-control" id="datepicker" name="month" autocomplete="off" value="<?php echo $month; ?>">
    <button class="btn button btn-primary" id="button-x"> x </button>
          <script>
      $( function() {
        $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true,showButtonPanel: true, dateFormat: 'MM yy', onClose: function(dataText, inst){ $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
      }
      });
      });
     </script>
     
		</div>


  <table class="table mt-2" id="datatable" style="empty-cells: show;">
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
  
    <tbody id="myTable">
     <?php foreach($users as $user):;?>
      <tr>
      <td><?php echo $user['account']?></td>
      <td><?php echo $user['amount']?></td>
      <td><?php echo $user['status']?></td>
      <td id="mature" ><?php echo date("y F Y", strtotime($user['maturity']));?></td>
      <td><?php echo $user['branchnumber']?></td>
      <td><?php echo $user['pn']?></td>
      </tr>

      <?php endforeach; ?>
      

    </tbody>
    <tfoot>
   
    </tfoot>
  </table>
    <?php  

      $page = ceil($rowcount / 2);

    ?>
    
  <ul class="pagination float-right">
    <?php for($x=1;$x<=$page;++$x):;?>
    <li class="page-item"><input type="submit" name="submit-input" class="page-link" value="<?php echo $x; ?>"></input></li>
  <?php endfor;?>
  </ul>
</form>
</div>        
  


  

<script type="text/javascript">
  $(document).ready(function(){
  $("#datepicker").on("change", function() {
    $('#form').submit();
  });
});

   $(document).ready(function(){
  $("#button-x").on("click", function() {
      $('#datepicker').val('');
      $('#form').submit();
  });
});


   $(document).ready(function(){
    $("$datepicker").on("click", function() {
    
  $("#ui-datepicker-div button").on("click", function() {
      $('#form').submit();
  });
  });
});

</script>