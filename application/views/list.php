<div class="container">

		<h2 class="mt-2 col-12"> Insurance Monitoring System </h2>
		<div class="row input-group">
		<input class="form-control col-9" id="myInput" type="text" placeholder="Search.." name="name">
    <input class="col-3" type="text" class="form-control" id="datepicker" name="maturity">
          <script>
      $( function() {
        $( "#datepicker" ).datepicker({changeMonth: true, changeYear: true,showButtonPanel: true, dateFormat: 'MM yy', onClose: function(dataText, inst){ $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
      }
      });
      });
     </script>
     <button id="picker" value="Search" class="btn button btn-primary">Search</button>
		</div>
  <table class="table mt-2">
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
  </table>
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
  $("#picker").on("click", function() {

    var value2 = $("#datepicker").val().toLowerCase();
    console.log(value2);


    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value2) > 2)
    });
  });
});
</script>