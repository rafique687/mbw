<div class="header section pt-15 pb-15">
        <div class="container">
          <div class="row">
            <div class="navbar-header col-2 header-bottom-left"> <a class="navbar-brand" href="index.html"> <img alt="Bigmarket" src="<?php echo $mydata['baseurl'];?>settingpic/<?php echo $mydata['basic'][4]['field_value'];?>"> </a> </div>
            <div class="col-10 header-bottom-right">
              <div class="header-menu">
                <div class="responsive-menubar-block">
                  <span>Shop By<br> Category</span>
                  <span class="menu-bar collapsed" data-target=".navbar-ex1-collapse" data-toggle="collapse"><i class="fa fa-bars"></i></span>
                </div>
                <nav id="menu" class="navbar">
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav main-navigation">
              <?php
                 $api_prod = $mydata['baseurl']."home/category";
                 //echo $api_prod;
                    $jsonprod= file_get_contents($api_prod);
                    $Rootcate = json_decode($jsonprod, true);
                    //echo "<pre>"; print_r($Rootcate);
                  foreach($Rootcate as  $rootcate) {?>
                   
                      <li <?php if($rootcate['product_name']=="Grocery & Staples"){?>class="main_cat dropdown active"<?php } else {?> class="main_cat dropdown" <?php  }?> > <a href="category_page.php">
                        <?php echo $rootcate['product_name']; ?></a>

                        <?php if($rootcate['product_name']=="Grocery & Staples")
                        {?>
                        <div class="dropdown-menu megamenu column4">
                        <?php }
                        else{?>
                            <div class="dropdown-menu megamenu column1">
                      <?php  } ?>

                          <div class="dropdown-inner">
                            <ul class="list-unstyled childs_1">


                              
                              <!-- 2 Level Sub Categories START -->
            <?php   
            $api_vegi = $mydata['baseurl']."home/vegetable?id=".$rootcate['prod_id'];
                 //echo $api_prod;
            $jsonvg= file_get_contents($api_vegi);
            $vegetable = json_decode($jsonvg, true);
            //echo "<pre>"; print_r($vegetable);
                  foreach ($vegetable as  $veg) {?>
                              <li class="dropdown" style="float: left;"><a href="category_page.php">
                                |<?php echo $veg['product_name'];?></a>
                                <div class="dropdown-menu">
                                  <div class="dropdown-inner">
                                    <ul class="list-unstyled childs_2">
                                      <li class="active"><a href="category_page.php">Arhar</a></li>
                                      <li><a href="category_page.php">Masoor</a></li>
                                      <li><a href="category_page.php">Moong</a></li>
                                      <li><a href="category_page.php">Rajma & Chana</a></li>
                                      <li><a href="category_page.php">Urad</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            <?php  } ?>
                              
                              <!-- 2 Level Sub Categories END -->
                            </ul>
                       
                      
                            <div class="menu-image"> <img src="images/13.jpg" alt="" title="" class="img-thumbnail"> </div>
                          </div>
                        </div>
                      </li>
                    <?php  } ?>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="header-link-search">
                <div class="header-search">
                  <div class="actions">
                      <button type="submit" title="Search" class="action search" id="head-search"></button>
                  </div>
                  <div id="search" class="input-group">
                    <input type="text" id="search-input" name="search" value="" placeholder="Search" class="form-control input-lg" autocomplete="off">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-lg">Search</button>
                    </span>
                  </div>
                </div>
                <div class="header-link">
                 <ul class="list-unstyled">
                  <li><a href="#">Bm offers</a></li>
                  <li><a href="#">Bm express</a></li>
                  <li><a href="#">Bm speciality</a></li>
                  <li><a href="#">Bm store</a></li>
                </ul>
              </div>
              </div>
              <div class="shopcart">
                <div id="cart" class="btn-block mt-40 mb-30 ">
                  <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">My basket</span><span id="cart-total">Item 0</span></button>
                  <a href="cart_page.html" class="cart_responsive btn"><span id="cart-text">My basket</span><span id="cart-total-res">0</span> </a>
                </div>
                <div id="cart-dropdown" class="cart-menu collapse">
                  <ul>
                    <li>
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td class="text-center"><a href="#"><img src="images/pro/70x70_1.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                            <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                              <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                            </td>
                            <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                          </tr>
                          <tr>
                            <td class="text-center"><a href="#"><img src="images/pro/70x70_2.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                            <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                              <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                            </td>
                            <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="text-right"><strong>Sub-Total</strong></td>
                            <td class="text-right">$2,100.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                            <td class="text-right">$2.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>VAT (20%)</strong></td>
                            <td class="text-right">$20.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>Total</strong></td>
                            <td class="text-right">$2,122.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <form action="cart_page.php">
                        <input class="btn pull-left" value="View cart" type="submit">
                      </form>
                      <form action="checkout_page.php">
                        <input class="btn pull-right" value="Checkout" type="submit">
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
