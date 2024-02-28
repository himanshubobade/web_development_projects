
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between">
						<h4 class="mb-0 font-size-18">Hi, <?php echo $campusambasador->name; ?></h4>

						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
						
					</div>
				</div>
			</div>     
			
			<div class="card">
				<div class="card-body">
				 <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>update-campus-ambasadors">
					<div class="row">
					<div class="col-md-8">
									
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10"> 
                                                <input placeholder="Name of CA" required class="form-control" name="name" value="<?php echo $campusambasador->name; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Email Address</label>
                                            <div class="col-md-10">
                                                 <?php echo $campusambasador->email; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Mobile Number</label>
                                            <div class="col-md-10">
                                               <?php echo $campusambasador->mobile; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">College</label>
                                            <div class="col-md-10">
                                              <select class="form-control" name="college" >
												<option value="">Select college</option>
												<?php foreach($collegesarray as $college){?>
												<option value="<?php echo $college->id; ?>" <?php if($college->id==$campusambasador->college){?> selected <?php }?>><?php echo $college->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Course</label>
                                            <div class="col-md-10">
                                               <select class="form-control" name="course" >
												<option value="">Select course</option>
												<?php foreach($coursesarray as $course){?>
												<option value="<?php echo $course->id; ?>"  <?php if($course->id==$campusambasador->course){?> selected <?php }?>><?php echo $course->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Year</label>
                                            <div class="col-md-10">
                                                <input placeholder="Year" class="form-control" name="year" value="<?php echo $campusambasador->year; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Country</label>
                                            <div class="col-md-10">
											<select class="form-control" name="country"  id="country"  >
												<option value="">Select Country</option>
												<?php foreach($countriesarray as $countries){?>
												<option value="<?php echo $countries->id; ?>"  <?php if($countries->id==$campusambasador->country){?> selected <?php }?>><?php echo $countries->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">States</label>
                                            <div class="col-md-10">
											<select class="form-control" name="state"  id="state"  >
												<option value="">Select State</option>
												<?php foreach($statesarray as $states){?>
												<option value="<?php echo $states->id; ?>"  <?php if($states->id==$campusambasador->state){?> selected <?php }?> ><?php echo $states->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">City</label>
                                            <div class="col-md-10">
											<select class="form-control" name="city"  id="city" >
												<option value="">Select City</option>
												<?php foreach($citiesarray as $city){?>
												<option value="<?php echo $city->id; ?>"  <?php if($city->id==$campusambasador->city){?> selected <?php }?> ><?php echo $city->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Residence</label>
                                            <div class="col-md-10">
											<select class="form-control" name="residence" >
												<option value="">Select Residence</option>
												<option value="Hostel"  <?php if('Hostel'==$campusambasador->residence){?> selected <?php }?> >Hostel</option>
												<option value="Local" <?php if('Local'==$campusambasador->residence){?> selected <?php }?>  >Local</option>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Facebook url</label>
                                            <div class="col-md-10">
                                                <input  placeholder="facebook url"class="form-control" name="facebook"  value="<?php echo $campusambasador->facebook; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Linkedin url</label>
                                            <div class="col-md-10">
                                                <input  placeholder="linkedin url"class="form-control" name="linkedin"  value="<?php echo $campusambasador->linkedin; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Instagram url</label>
                                            <div class="col-md-10">
                                                <input  placeholder="instagram url"class="form-control" name="instagram" value="<?php echo $campusambasador->instagram; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Twitter url</label>
                                            <div class="col-md-10">
                                                <input placeholder="twitter url"class="form-control" name="twitter"  value="<?php echo $campusambasador->twitter; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Document</label>
                                            <div class="col-md-10">
                                                <input   type="file"  class="form-control" name="document" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Resume</label>
                                            <div class="col-md-10">
                                                <input   type="file"  class="form-control" name="resume" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label" style="color: #e30c2c;"><?php echo $error;?></label>
                                            
                                        </div>
                                      
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mt-2" name="campusambasador" value="<?php echo $campusambasador->id; ?>">Update Campus Ambasador</button>
                                            </div>
                                        </div>    
					</div>
					</div>
										
										</form>
                                   
				</div>
			</div>
			<div class="card">
				<div class="card-body">
				 <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>update-campus-ambasadors-password"> 
					<div class="row">
					<div class="col-md-6">
					  <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label" style="color: #e30c2c;"><?php echo $passerror;?></label>
                                            
                                        </div>
						<div class="form-group row">
						
							<label for="example-text-input" class="col-md-2 col-form-label">Password</label>
							<div class="col-md-10">
								<input type="password" placeholder="12345678" required class="form-control" name="password" />
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-md-2 col-form-label">Confirm Password</label>
							<div class="col-md-10">
								<input type="password" placeholder="12345678" required  class="form-control" name="confirm_password" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-10">
								<button type="submit" class="btn btn-primary mt-2" name="campusambasador" value="<?php echo $campusambasador->id; ?>">Update Campus Ambasador</button>
							</div>
						</div>       
					</div>
					</div>
						
						</form>
                                
				</div>
			</div>
			
		</div>
	</div>
		<script>
				$('#country').on('change',function(){
        var countryID = $(this).val();

        if(countryID){
            $.ajax({
                type:"POST",
                url: "<?php echo base_url();?>hello-admin/states", 
                data: {
					country : countryID
				},
                dataType: "json", 
                success:function(res){
                    if(res){
                        $("#state").empty();
                        $("#state").append('<option value="">Select State</option>');
                        $.each(res,function(key,value){
                            $("#state").append('<option value="'+key+'">'+value+'</option>');
                        }); 

                    }else{
                        $("#state").empty();
                    }
                },error:function(e)
                {
                    alert("error");
                }
            });
        }else{
            $("#state").empty(); 
        } 
    });
				$('#state').on('change',function(){
        var stateID = $(this).val();

        if(stateID){
           
            $.ajax({
                type:"POST",
                url: "<?php echo base_url();?>hello-admin/cities", 
                data: {
					state : stateID
				},
                dataType: "json", 
                success:function(res){
                    if(res){
                        $("#city").empty();
                        $("#city").append('<option value="">Select City</option>');
                        $.each(res,function(key,value){
                            $("#city").append('<option value="'+key+'">'+value+'</option>');
                        }); 
                    }else{
                       $("#city").empty();
                    }
                },
				error:function(e)
                {
                    alert("error");
                }
            });
        }else{
           $("#city").empty(); 
        } 
    });
</script>