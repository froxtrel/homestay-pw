<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">   

  	<form class="amenities-form">

  	 <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
              	<p>Don't know what to do? Check out our step-by-step tutorial <a href="#">here</a>.</p>
                <button id="#" type="submit" class="btn ml-auto download-button">HISTORY</button>
                <button id="amenities-submit" type="submit" class="btn purchase-button">SAVE</button>
              </span>
            </div>
          </div>

    <div class="row">
       <div class="col-md-6">
       		<div class="card">
                <div class="card-body">
                  <h4 class="card-title">DEFAULT AMENITIES</h4>
                    <div class="row">
                      <div class="col-md-12">
                      	<div class="row">

                      	<?php 

                      	$checked =  explode(',',$amenities_checked['0']['amenities']);

                      	?>

                      	<?php foreach($amenities_list as $item):?>
                      		<div class="col-md-6">
                      			 <div class="form-group">
		                          <div class="form-check form-check-flat">
		                            <label class="form-check-label">
		                              <input type="checkbox" class="form-check-input" name="<?php echo ucfirst($item['name']) ;?>" 
		                              <?php echo (in_array(ucfirst($item['name']), $checked) ? 'checked' : '');?>> 
		                              <?php  echo ucfirst($item['name']) ;?>
		                            <i class="input-helper"></i></label>
		                          </div>                                                               
		                        </div>
                      		</div>
                      	<?php endforeach;?>	

                      	</div>
                      </div>
                    </div>
                </div>
              </div>
       </div>
       <div class="col-md-6">      		              
	       	<div class="card">
	                <div class="card-body">
	                  <h4 class="card-title">CUSTOM AMENITIES</h4>
	                    <div class="row">
	                      <div class="col-md-12">
	                      	<div class="row" id="custom-amenities">

                        	   <?php foreach($amenities_custom as $item):?>
		                      		<div class="col-md-6">
		                      			 <div class="form-group">
				                          <div class="form-check form-check-flat">
				                            <label class="form-check-label">
				                              <a href="#" class="float-right"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				                              <input type="checkbox" class="form-check-input" name="<?php echo ucfirst($item['amenities']) ;?>" 
				                              <?php echo ($item['state'] ? 'checked' : '');?>> 
				                              <?php  echo ucfirst($item['amenities']) ;?>	                             
				                            <i class="input-helper"></i></label>
				                          </div>                                                               
				                        </div>
		                      		</div>
		                      	<?php endforeach;?>	

	                      	</div>
	                      </div>
	                    </div>
	                  </form>
	              </div>
	          </div>
	          <br>
	          <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADD CUSTOM AMENITIES</h4>
                  <form class="custom-amenities-form" method="POST">
                    <div class="row">
                      <div class="col-md-12">                      	
                        <div class="custom-amenities-form">
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="amenities_name"><small>AMENITIES TYPE:</small></label>
                                 <input type="text" class="form-control" name="amenities_name" placeholder="BBQ" required>
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="amenities_icon"><small>ICON:</small></label>
                      			 <input disabled type="text" class="form-control" name="amenities_icon"  value="" placeholder="Coming Soon" required>
                    		</div>
                    	</div>  
                    	<br>    
                    	<button id="amenities-custom-submit" type="submit" class="btn btn-success mr-2">ADD AMENITIES</button>      
                    	</div>

                      </div>
                    </div>
                  </form>
                </div>
              </div>

       	</div>
    	</div>  
	</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->