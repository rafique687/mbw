		<!-- main content start-->

		
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-list icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $totalcate;?></strong></h5>
                      <span>Total Category</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-product-hunt icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $totalprod; ?></strong></h5>
                      <span>Online Products</span>
                    </div>
                </div>
        	</div>
        	<!-- <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$1012</strong></h5>
                      <span>Expenses</span>
                    </div>
                </div>
        	</div> -->
        	<!-- <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Expenditure</span>
                    </div>
                </div>
        	 </div> -->
        	<div class="col-md-4 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-cogs icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $services; ?></strong></h5>
                      <span>Services</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<div class="row-one widgettable">
			<div class="col-md-7 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>Recent Oreder</h3>
                    </div>
					
						<div id="" style="width: 98%; height: 350px">
							
             <table id="example" class="table table-striped table-bordered display nowrap" style="width:100%">

            <thead> 
                <tr> 
	                 <th>Order Id</th>
                   <th>Date</th>
                  <th>User Name</th>
                  <th>Contact</th>
                
                 
                   <!--<th>Qty</th>
                   <th>Amt</th>-->
                  
                  
                  
                 
                    
                </tr> 
            </thead> 
            <tbody> 
               	<?php foreach ($enquery as $ord) {?>
               	    <tr> 
               	    	<td><?php echo $ord['orderid'];?></td>
                            <td><?php echo $ord['place_date'];?></td>
                            <td><?php echo $ord['name']?></td>
                            <td><?php echo $ord['mobile']?></td>

                            <!--<td><?php echo $ord['total_item']?></td>
                            <td><?php echo $ord['grand_total']?></td>-->
               	 	</tr>
               	 <?php  }?>
               	 <tr>
               	 	<td></td>
               	 	<td></td><td>
               <a href="<?php echo site_url()?>Manage_order/view_order" class="btn btn-info">
               View More</a>
           </td>
           </tr>
            </tbody>
           </table>
		</div>
						
				</div>
			</div>
	
			<div class="col-md-2 stat">
				
				<div class="content-top">
				<?php  
				$fb=$this->session->userdata('fb');
				if(!empty($fb)){?>

					<div class="top-content facebook">
						<a href="<?php echo $fb; ?>" target="_blak"><i class="fa fa-facebook"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><!-- <b>1,296</b> --><p>Friends</p></li>
						<li class="col-md-6"><!-- <b>647</b><p>Likes</p> --></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			<?php  } ?>
			<?php 
			$insta=$this->session->userdata('insta');
				if(!empty($insta)){?>
				<div class="content-top">
					<div class="top-content twitter">
						<a href="<?php echo $insta ;?>" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><!-- <b>1,997</b> --><p>Followers</p></li>
						<li class="col-md-6"><!-- <b>389</b> --><p>Tweets</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			<?php } ?>
			<?php 
			$gp=$this->session->userdata('gp');
				if(!empty($gp)){?>
				<div class="content-top">
					<div class="top-content google-plus">
						<a href="<?php echo $gp ; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><!-- <b>1,216</b> --><p>Followers</p></li>
						<li class="col-md-6"><!-- <b>321</b> --><p>shares</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			<?php  } ?>
			</div>


			<div class="col-md-2 stat">
			<?php 	$in=$this->session->userdata('in');
				if(!empty($in)){?>
				<div class="content-top">
					<div class="top-content facebook">
						<a href="<?php echo $in; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><!-- <b>1,296</b> --><p>Friends</p></li>
						<li class="col-md-6"><!-- <b>647</b> --><p>Likes</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			<?php } ?>
			<?php 	$twiter=$this->session->userdata('twiter');
				if(!empty($twiter)){?>
				<div class="content-top">
					<div class="top-content twitter">
						<a href="<?php echo $twiter ; ?>" targe="_blank"><i class="fa fa-twitter"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><!-- <b>1,997</b> --><p>Followers</p></li>
						<li class="col-md-6"><!-- <b>389</b> --><p>Tweets</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			<?php  } ?>
				<!-- <div class="content-top">
					<div class="top-content google-plus">
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,216</b><p>Followers</p></li>
						<li class="col-md-6"><b>321</b><p>shares</p></li>
						<div class="clearfix"></div>
					</ul>
				</div> -->
			</div>
			<div class="clearfix"> </div>
		</div>
				
			<!-- 	<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<div class="card-header">
							<h3>Bar chart</h3>
						</div>
						
						<div id="container" style="width: 100%; height:270px;">
							<canvas id="canvas"></canvas>
						</div>
						<button id="randomizeData">Randomize Data</button>
						<button id="addDataset">Add Dataset</button>
						<button id="removeDataset">Remove Dataset</button>
						<button id="addData">Add Data</button>
						<button id="removeData">Remove Data</button>
						
					</div>
					
					<div class="col-md-4 charts-grids widget states-mdl">
						<div class="card-header">
							<h3>Column & Line Graph</h3>
						</div>
						<div id="chartdiv"></div>
					</div>
			
					<div class="clearfix"> </div>
				</div> -->
				
	
	<!-- for amcharts js -->
			<script src="<?php echo base_url()?>js/amcharts.js"></script>
			<script src="<?php echo base_url()?>js/serial.js"></script>
			<script src="<?php echo base_url()?>js/export.min.js"></script>
			<link rel="stylesheet" href="<?php echo base_url()?>css/export.css" type="text/css" media="all" />
			<script src="<?php echo base_url()?>js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="<?php echo base_url()?>js/index1.js"></script>
	<!-- 
		<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content"> -->
					<!-- 	<h4 class="title">Carousel Slider</h4> -->
					<!-- start content_slider -->
				<!-- 	<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider1.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider2.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider3.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider4.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider5.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider6.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider7.jpg" alt="name">
						</div>
						
					</div> -->
			<!-- 	</div> -->
					<!--//sreen-gallery-cursual---->
			<!-- </div>
		</div>
		 -->
		<!-- <div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2>Inbox</h2>
					<div class="scrollbar" id="style-1">
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Michael Chris</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:05 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Alexander</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:06 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Daniel Lucas</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>01:30 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/2.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Jackson Jacob</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>01:50 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">David Samuel</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:20 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">laura Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:50 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>chat</h3>
					<div class="scrollbar" id="style-3">
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:01 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Hello ! this is Michael chris</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Hi,How are you ? What about our next meeting?</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:02 AM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:05 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Yeah fine, Hope you the same</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Send"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>todo</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									<li>
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span> Integer sollicitudin lacinia condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand1" value="">
										<label for="brand1"><span></span> ligula sit amet hendrerit init lorem.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand2" value="">
										<label for="brand2"><span></span>  Donec aliquam dolor eu augue condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand9" value="">
										<label for="brand9"><span></span>  at tristique Pain that produces no resultant.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand8" value="">
										<label for="brand8"><span></span> Nulla finibus rhoncus turpis quis tristique.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand7" value="">
										<label for="brand7"><span></span> Cupidatat non proident Praising pain.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand3" value="">
										<label for="brand3"><span></span>  libero vel elementum euismod, mauris tellus</label>
									</li>
									<li>
										<input type="checkbox"  id="brand4" value="">
										<label for="brand4"><span></span> Donec aliquam dolor eu augue condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand5" value="">
										<label for="brand5"><span></span> Orci varius natoque penatibus et magnis dis.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand6" value="">
										<label for="brand6"><span></span> parturient Dolorem ipsum quia.</label>
									</li>
									
									
								</ul>
							</div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div> -->
				
			</div>
		</div>
	