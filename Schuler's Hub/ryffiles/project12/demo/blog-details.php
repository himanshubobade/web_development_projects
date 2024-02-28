<?php include("include/header.php"); ?>

  <div class="main-content">

    <section class="inner-header divider parallax layer-overlay " data-stellar-background-ratio="0.5" data-bg-img="images/pattern/bg-pattern.png">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white mb-0 font-weight-600">Blog Title</h3>
			  <ol class="breadcrumb mt-0 white">
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li class="active">Blog Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section>
		<div class="container pb-120">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<article class="post clearfix mb-sm-30 bg-white box-shadow-10 border-radius-5 overflow-hidden ">
								<div class="entry-header">
								  <div class="post-thumb thumb"> 
									<img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
								  </div>
								</div>
								<div class="entry-content p-20 pr-10 bg-white">
								  <div class="entry-meta media mt-0 no-bg no-border mb-5">
									<div class="media-body ">
									  <div class="event-content pull-left flip">
										<p class="mb-5"><i class="fa fa-clock-o" aria-hidden="true"></i> 16 Aug, 2018</p>
										<h4 class="entry-title text-white font-20 m-0 mt-5 font-weight-600 text-theme-colored">Post title here</h4>
									  </div>
									</div>
								  </div>
								  <p class="font-16 line-height-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								  <div class="clearfix"></div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<?php include("include/side-register.php"); ?>
				</div>
			</div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
 <?php include("include/footer.php"); ?>