
				<!--Left Filter -->

				<aside class="col-sm-4 col-md-3" id="column-left">

					<div class="module latest-product titleLine">

					   <h3 class="modtitle" style="background-color:#1423dd; color: #fff;border-bottom:#1423dd !important;">Filter </h3>

					   <div class="modcontent ">

							<form class="type_2" method="post">

								<div class="table_layout filter-shopby">

									<div class="table_row">

										<!-- <div class="table_cell" style="z-index: 103;">

											<input class="form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="searchbox">

										</div> -->

										<div class="">

											<fieldset>

												
			<legend>Brand</legend>

			<ul class="checkboxes_list">
				<?php foreach($brand as $brands)
                		{?>
				<li class="redirect showLoading" redirectUrl="<?php echo site_url('product/products?id='.$brands['prod_id'])?>" style="width:100%; background-color:blue; !important;">

					<!-- <input value="dry-fruits"  type="radio" name="category_id" id="category_38"> -->

					<label for="category_38" style="width:100%">
						<a class="btn btn-outline-info" style="width:100% !important;background-color:#1423dd !important;">
						<?php echo $brands['sucate'];?></a></label>

				</li>
			<?php } ?>
			</ul>
			</fieldset>
			</div>
			</div>
			</div>

							</form>

					   </div>				   

					</div>



					<div class="module">

						<div class="modcontent clearfix">

							<div class="">

								<div>

								<!-- 	<a href="#"><img src="https://healthymaster.in/img/banner/2.jpg" alt="left-image"></a> -->

								</div>

							</div>						

						</div>

					</div>

				</aside>

				<!--Left Filter -->