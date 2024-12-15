<?php include("header.php");?>
<?php 
		  if(isset($_GET['sid']))
		  {
			$itemapi_vegi = $mydata['baseurl']."home/itemlist?sid=".$_GET['sid'];
			//echo $api_vegi;
		  }
		  else
		  {
			$itemapi_vegi = $mydata['baseurl']."home/itemlist?id=".$_GET['id'];
		  }
      //$api_vegi = $mydata['baseurl']."home/itemlist?id=".$_GET['id'];
      $jsonvg= file_get_contents($itemapi_vegi);
      $vegetable = json_decode($jsonvg, true);
      //echo "<pre>"; print_r($vegetable);?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercas">
          <?php
		  if(isset($_GET['id']))
		  {
			  $categoryname = $mydata['baseurl']."home/category_name?id=".$_GET['id'];
		  }
			else
			{
				$categoryname = $mydata['baseurl']."home/category_name?id=".$vegetable[0]['root_cate'];
			}
          
          $jsoncatename= file_get_contents($categoryname);
          $catename = json_decode($jsoncatename, true);
          echo $catename['catname']['product_name'];
         // echo "<pre>"; print_r($catename);
          ?>

        </h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active"><?php echo $catename['catname']['product_name']; ?></li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="product-section section mt-30">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row">
	  
        <div id="column-left" class="col-lg-3 col-xl-3 col-sm-4">
          <div id="category-menu" class="mb-30 mt-10">
            <div class="nav-responsive">
              <div class="heading-part">
                <h3 class="section_title">Sub category</h3>
              </div>
              <ul>
          <?php
		  if(isset($_GET['id']))
		  {
			 $sbapi_prod = $mydata['baseurl']."home/subcategory_name?id=".$_GET['id'];
            
           }
	  else
	  {
		   $sbapi_prod = $mydata['baseurl']."home/subcategory_name?id=".$vegetable[0]['root_cate'];
		   //echo $sapi_prod;
	  }
			 //echo $sapi_prod;
          $sjsonprod= file_get_contents($sbapi_prod);
          $sproductt = json_decode($sjsonprod, true);
		 //echo "<pre>"; print_r($sproductt);
          foreach ($sproductt['catname'] as  $prodd)
           {?>
		  
              <li>
                  <a href="subcategory.php?sid=<?php echo $prodd['prod_id'];?>">
                  <?php echo $prodd['product_name']?>
                  </a>
                </li>	
    <?php  }  ?> 
              </ul>
            </div>
          </div>
		  
		  <div id="category-menu" class="mb-30 mt-10">
            <div class="nav-responsive">
              <div class="heading-part">
                <h3 class="section_title">Top category</h3>
              </div>
              <ul>
          <?php
          $api_prod = $mydata['baseurl']."home/category";
          $jsonprod= file_get_contents($api_prod);
          $product = json_decode($jsonprod, true);
          foreach ($product as  $prod)
           {?>
                <li>
                  <a href="subcategory.php?id=<?php echo $prod['prod_id'];?>">
                  <?php echo $prod['product_name']?>
                  </a>
                </li>
    <?php  }  ?> 
              </ul>
            </div>
          </div>

        </div>
        <div class="col-lg-9 col-xl-9 col-sm-8">
          <div class="category-page-wrapper mb-15 pb-10">
            <div class="row">
            <div class="col list-grid-wrapper Order-1">
              <div class="btn-group btn-list-grid">
                <button type="button" id="grid-view" class="btn btn-default grid-view active"></button>
                <button type="button" id="list-view" class="btn btn-default list-view"></button>
              </div>
            </div>
            <div class="col-md-auto page-wrapper order-12">
            <!--   <label class="control-label" for="input-limit">Show :</label>
              <div class="limit">
                <select id="input-limit" class="form-control">
                  <option value="8" selected="selected">08</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="75">75</option>
                  <option value="100">100</option>
                </select>
              </div> -->
            </div>
            <div class="col-md-auto sort-wrapper order-11">
              <label class="control-label" for="input-sort">Sort By :</label>
              <div class="sort-inner">
                <select id="input-sort" class="form-control">
                  <option value="ASC" selected="selected">Default</option>
                  <option value="ASC">Name (A - Z)</option>
                  <option value="DESC">Name (Z - A)</option>
                  <option value="ASC">Price (Low &gt; High)</option>
                  <option value="DESC">Price (High &gt; Low)</option>
                  <option value="DESC">Rating (Highest)</option>
                  <option value="ASC">Rating (Lowest)</option>
                  <option value="ASC">Model (A - Z)</option>
                  <option value="DESC">Model (Z - A)</option>
                </select>
              </div>
            </div>
          </div>
          </div>
          
          <div class="row">
<?php if(!empty($vegetable)){
      foreach ($vegetable as  $veg) {
        if(!empty($veg['item_pic'])){
           $pic=explode(",",$veg['item_pic']);?>
            <div class="product-layout  product-grid col-lg-3 col-6 ">
              <div class="item">
                <form  action="product_detail_page.php" method="post">
               <div class="product-thumb transition">
                  <div class="image" style="height: 180px !important;object-fit: cover;">
                    <div class="first_image"> 
                      <a href="product_detail_page.php?pic=<?php echo $veg['item_pic'];?>&folder=item&id=<?php echo $veg['item_id'];?>&rid=<?php echo $_GET['id']?>"> 
                        <img src="<?php echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="pure-spice-3" title="pure-spice-3" class="img-responsive" style="height:178px; width: 100%"> 
                      </a> 
                    </div>
                    <div class="swap_image" style="height: 180px !important;object-fit: cover;"> 
                      <a href="product_detail_page.php?pic=<?php echo $veg['item_pic'];?>&folder=item&id=<?php echo $veg['item_id'];?>&rid=<?php echo $_GET['id']?>"> 
                        <img src="<?php echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="pure-spice-3" title="pure-spice-3" class="img-responsive" style="height:178px; width: 100%"> 
                      </a>
                    </div>
                  </div>
                  <div class="product-details">
                    <div class="caption">
                      <h4><a href="product_detail_page.php?pic=<?php echo $veg['item_pic'];?>&folder=item&id=<?php echo $veg['item_id'];?>&rid=<?php echo $_GET['id']?>"><?php echo substr($veg['item_name'], 0, 17);?></a></h4>
                      <p class="price">
                       
                        <span class="price-tax">
                       
                        </span></p>
                      <p class="desc">
                        freshly picked for you.Store them in a cool, dry place away from direct 
                      </p>
                      <div class="product_option">
                        <div class="form-group required ">
                         Qty.
                    <input name="pqty" min="1" value="1" type="number"  style="width: 70px; height: 20px;"><?php echo $veg['perunit'].  $veg['unit'];?>
                        </div>
                        
                         
                        
                        
                        <div class="input-group button-group">
                          <label class="control-label"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12"><?php echo $veg['price'];?>/-</label>
                  <input type="hidden" name="item_id" value="<?php echo $veg['item_id'] ?>">
                  <input type="hidden" name="item_name" value="<?php echo $veg['item_name'] ?>">
                  <input type="hidden" name="pic" value="<?php echo $veg['item_pic'] ?>">
                  <input type="hidden" name="pprice" value="<?php echo $veg['price'] ?>">
                         
                        <input type="submit"  value="Add" class="addtocart pull-right">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </form>
              </div>
            </div>
          <?php } } 
        } else{?>
            <h1 style="margin: 10% 10%">No Category Available</h1>
          <?php } ?>
          </div>
          <div class="pagination-nav text-center mt-50">
            <!-- <ul>
              <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
              <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
              <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->

    </div>
    <?php include("footer.php");?>