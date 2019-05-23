<div class="container">
	<h2 class="mt-2 col-12"> Insurance Monitoring System </h2>

  <div style="display: none;" class="alert alert-success col-4 form-group" id="success">
    <strong>Success!</strong> <label id="succes-message"> Success User Added </label>
  </div>
  
 
	<form method="POST" class="mt-2" action="<?php echo base_url('save')?>" id="form">

        <div class="row col-lg-4 pr-0 col-sm-12">

          <div class="col-6 pr-0 form-group" >
          <select  id="branch" name="branchid" class="custom-select form-control ">
            <option value="" selected disabled>Select Branch</option>
            <?php foreach($branch as $branches): ;?>
            <option name="branchid" value="<?php echo $branches['id']?>"><?php echo $branches['branchnumber']?></option>
            <?php endforeach;?>
          </select>
           <label id="branch-error" class="small invalid-tooltip"> </label>
        
          </div>
          <div class="col-6 pr-0 form-group">
          <select id="part" name="pnid" class="custom-select form-control">
            <option value="" selected disabled>Part Number</option>
            <?php foreach($part as $parts): ;?>
            <option  value="<?php echo $parts['id']?>"> <?php echo $parts['pn']?> </option>
            <?php endforeach;?>
            </select>
          <label id="part-error" class="small invalid-tooltip">  </label>
          </div>
        </div>
        

        
        <div class="form-group mt-1 col-lg-4 col-sm-12 ">
        	<input type="text" class="form-control"  id="account" placeholder="Account Name" name="account" >
           <label id="account-error" class="small invalid-tooltip"> </label>  
        </div>
          <div class="form-group mt-1 col-lg-4 col-sm-12">
            <input type="text" class="form-control" id="amount" placeholder="Loan Amount" name="amount">
            <label id="amount-error" class="small invalid-tooltip">  </label>
        </div>

      <div class="form-group mt-1 col-lg-4 col-sm-12">
          <input id="datepicker" name="maturity" readonly>
          <script>
            var dateToday = new Date();
             $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            minDate: dateToday,
            uiLibrary: 'bootstrap4'
             }); 

           </script>
           <label  id="maturity-error" class="small invalid-tooltip"> </label>
       </div> 

        <div class="form-group col-lg-4 col-sm-12">
        <input class="btn btn-primary" type="submit" value="submit"> </input>
        <a href="<?php echo base_url(); ?>" class="btn btn-danger text-decoration-none text-white">Return </a>
    	</div>


    <p> 
        <label><input type="radio" name="radio" value="option1">12 Months</label> 
        <label><input type="radio" name="radio" value="option2">36 Months</label>
        <label><input type="radio" name="radio" value="option3">48 Months</label>
    </p>
    

    </form>
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