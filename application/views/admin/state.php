
<!--------------------boot strapdata table------------------------------------------------->
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<!--------------------boot strapdata table------------------------------------------------->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css
" rel="stylesheet" type="text/css">

<!----------------------------------------------------------------------------------------->

<!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <div class="tables" style="margin-top:0px;">
       
            <a href="<?php echo site_url()?>/Location/addstate" class="btn btn-info pull-right">Add State</a>
       
          <h2 class="title1">Manage Location</h2>
        
          <div class="table-responsive bs-example widget-shadow">
            <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
         
            <h4>State Of <?php echo $cntname['contry']; ?></h4>
        
             <table id="example" class="table table-striped table-bordered" style="width:100%">
            
              
            <?php if(isset($_GET['sucess']))
              {?>
                  <div class="alert alert-success">
                      <strong><?php echo $_GET['sucess']?></strong> 
                  </div> 
              <?php } ?> 
              <thead> 
                <tr> 
                  <th style="width:20px;">S.No</th>
                  <th>state Name</th>
                  <th>Action</th>
                </tr> 
              </thead>  
              <tbody> 
                 <?php  $i=1;
                 //echo "<pre>"; print_r($product);exit;
                 foreach($state as $prod){?>
                <tr> 
                  <td style="width:20px;">
                      <?php echo $i ?>
                  </th> 
                  <td>
                      <?php echo $prod['state'] ;?>
                  </td>
                  
                  <td>
                     
                    <a href="<?php echo site_url()?>/Location/editstate?id=<?php echo $prod['stateid']?>" class="btn btn-info"><i class="fa fa-edit"></i>
                   </a>
                  
                    <a href="<?php echo site_url()?>/Location/deleteproduct?id=<?php echo $prod['stateid']?>" class="btn btn-danger">
                      <i class="fa fa-trash" ></i>
                    </a> 
                 
                      <a href="<?php echo site_url()?>/Location/city?category=<?php echo $prod['stateid']?>" class="btn btn-info"><i class="fa fa-cog"></i>
                      </a>
                     <!--  <?php if($prod['state_status']==1)
                          {?>
                        
                            <label class="switch"><input type="checkbox" value="<?php echo $prod['stateid'],",".$prod['state_status']?>" checked class="checkss" name="status">
                            <span class="slider round"></span></label>
                    <?php } 
                       elseif($prod['state_status']==2){?>
                            <label class="switch">
                            <input type="checkbox" value="<?php echo $prod['stateid'].",".$prod['state_status']?>" id="dact" name="status" class="checkss" >
                            <span class="slider round"></span>
                          </label>
                         
                  <?php } ?> -->
                  </td> 
                  
                </tr> 
              <?php
                  $i++;
                } ?>
                
                 
              </tbody> 
            </table> 
          </div>
        </div>
      </div>
    </div>
    
    <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url()?>js/bootstrap.js"> </script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <!-- //Bootstrap Core JavaScript -->
  <script>
 
    </script>

    <script>
      $(document).ready(function () {
$('#example').DataTable({
  "aaSorting": [],
  columnDefs: [{
  orderable: false,
  targets:[2, 3]
  }]
});
  $('.dataTables_length').addClass('bs-select');
});
    </script>
    