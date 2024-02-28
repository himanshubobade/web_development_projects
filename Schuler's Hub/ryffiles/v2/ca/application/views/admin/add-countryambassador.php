<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Add Campus Ambasador</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin/country-ambasadors">Campus Ambasador</a></li>
                                            <li class="breadcrumb-item active">Add Country Ambasador</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
						
						<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
									<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>hello-admin/country-ambasadors/add-new-country-ambasadors/submit">
									
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Name</label>
                                            <div class="col-md-10">
                                                <input placeholder="Name of CA" required class="form-control" name="name"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Email Address</label>
                                            <div class="col-md-10">
                                                <input placeholder="Email Address" required class="form-control" name="email"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Mobile Number</label>
                                            <div class="col-md-10">
                                                <input placeholder="Mobile Number" required type="number" class="form-control" name="mobile"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Password</label>
                                            <div class="col-md-10">
                                                <input type="password" required placeholder="12345678"class="form-control" name="password"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">College</label>
                                            <div class="col-md-10">
                                              <select class="form-control" name="college" >
												<option value="">Select college</option>
												<?php foreach($collegesarray as $college){?>
												<option value="<?php echo $college->id; ?>"><?php echo $college->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Course</label>
                                            <div class="col-md-10">
                                               <select class="form-control" name="course" >
												<option value="">Select course</option>
												<?php foreach($coursesarray as $course){?>
												<option value="<?php echo $course->id; ?>"><?php echo $course->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Year</label>
                                            <div class="col-md-10">
                                                <input placeholder="Year" class="form-control" name="year"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Country</label>
                                            <div class="col-md-10">
											<select class="form-control" name="country" id="country" >
												<option value="">Select Country</option>
												<?php foreach($countriesarray as $countries){?>
												<option value="<?php echo $countries->id; ?>" <?php if($countries->id=='101'){ echo 'selected';}?>><?php echo $countries->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">States</label>
                                            <div class="col-md-10">
											<select class="form-control" name="state" id="state" >
												<option value="">Select State</option>
												<?php foreach($statesarray as $states){?>
												<option value="<?php echo $states->id; ?>"><?php echo $states->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">City</label>
                                            <div class="col-md-10">
											<select class="form-control" name="city" id="city"  >
												<option value="">Select City</option>
												 
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Residence</label>
                                            <div class="col-md-10">
											<select class="form-control" name="residence" >
												<option value="">Select Residence</option>
												<option value="Hostel">Hostel</option>
												<option value="Local">Local</option>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Facebook url</label>
                                            <div class="col-md-10">
                                                <input  placeholder="facebook url"class="form-control" name="facebook" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Linkedin url</label>
                                            <div class="col-md-10">
                                                <input  placeholder="linkedin url"class="form-control" name="linkedin" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Instagram url</label>
                                            <div class="col-md-10">
                                                <input  placeholder="instagram url"class="form-control" name="instagram" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Twitter url</label>
                                            <div class="col-md-10">
                                                <input placeholder="twitter url"class="form-control" name="twitter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Document</label>
                                            <div class="col-md-10">
                                                <input   type="file"  class="form-control" name="document" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Resume</label>
                                            <div class="col-md-10">
                                                <input   type="file"  class="form-control" name="resume" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400" style="color: #e30c2c;"><?php echo $error;?></label>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mt-2" name="para" value="">Add Country Ambasador</button>
                                            </div>
                                        </div>
										
										</form>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
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