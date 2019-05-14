<div class="container">
	<h2 class="mt-2 col-12"> Account </h2>
	<form method="POST" class="mt-3">
        <?php foreach($user as $datas): ;?>
        <div class="row col-lg-6 col-sm-12 mt-2 p-0">
            <div class="col-lg-4 col-sm-12">
                <label class="col-12 m-0"> <?php echo $datas['firstname']?> </label>
                 <label class="col-12 small font-weight-bold"> First Name </label>
            </div>
            <div class="col-lg-4 col-sm-12">
                <label class="col-12 m-0"> <?php echo $datas['middlename']?> </label>
                <label class="col-12 small font-weight-bold">  Middle Name</label>
            </div>
            <div class="col-lg-4 col-sm-12">
                <label class="col-12 m-0"> <?php echo $datas['lastname']?> </label>
                 <label class="col-12 small font-weight-bold"> Last Name</label>
            </div>
        </div>
        <div class="col-12 mt-3">
        	<label class="font-weight-bold"> Account Number : </label>
            <label><?php echo $datas['account'] ?></label>
        </div>
        <div class="form-group col-lg-4 col-sm-12">
        	<input type="password" class="form-control form-control-user"  placeholder="Loan Amount">
        </div>
        
        <div class="col-12">
        <a class="btn btn-primary text-decoration-none text-white"> Submit</a>
        <a href="<?php echo base_url(); ?>" class="btn btn-danger text-decoration-none text-white">Return </a>
    	</div>
         <?php endforeach;?>
    </form>
</div>