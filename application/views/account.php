<div class="container">
	<h2 class="mt-2 col-12"> Account </h2>
	<form method="POST" class="mt-2" action="<?php echo base_url('login')?>">
        
         <div class="form-group col-lg-4 col-sm-12">
        	<input type="text" class="form-control form-control-user"  placeholder="Account Number" name="account">
        </div>
        <div class="form-group col-lg-4 col-sm-12">
        	<input type="password" class="form-control form-control-user"  placeholder="Pin" name="pin">
        </div>
        
        <div class="col-12">
        <input class="btn btn-primary" type="submit" value="submit"> </input>
         <a href="<?php echo base_url(); ?>" class="btn btn-danger text-decoration-none text-white"> Return </a>
    	</div>
    </form>
</div>