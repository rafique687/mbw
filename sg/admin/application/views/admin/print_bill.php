<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){ 
$('.checkss').change(function () {
var contry = ($(this).val());
jQuery.ajax({ 
              url: "<?php echo site_url()?>/product/item_status?id="+contry,
              type: "GET",
              data: "id = "+ contry,
              dataType: "html",
              success: function(response)
              {
              if (response != 0) {  
                  //alert("Category status changed!!!!");  
                  //location.reload();  
              }  
          },  
                error: function (response)
                 {  
                    if (response != 1)
                     {  
                        alert("Error!!!!");  
                     }  
                  }               
        });
    });
});
</script>
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
        <div class="tables" id="print">
         <!--  <a href="javascript:window.print()" class="btn btn-info pull-right">Print Bill</a> -->
         <input type="button" class="btn btn-info pull-right" onclick="printDiv('bill')" value="print Bill" />
        <h2 class="title1">SG MAART</h2>
        
        <div class="table-responsive bs-example widget-shadow" id="bill">
          <h3 style="text-align:center">SG Maart</h3>
             <h5>
              Order Id : <?php echo $order['orderid'];?></h5>
             <h5> Customer Name : <?php echo $order['name'];?>
               </h5>
               <h5>Payment Method : <?php echo $order['paid_method'];?></h5>
               <h5> Delivery Address: <?php echo $order['address'];?></h5>
               <h5> Contact: <?php echo $order['mobile'];?></h5>
             
              <table  class="table table-striped table-bordered" style="width:100%">
          
              <thead> 
                <tr> 
                  
                  <th>Sr.No</th>
                  <th>Item Name</th>
                  <th>Qauntity</th>
                  <th>Unit Price</th>
                  <th>Sub Total</th>
                 
                </tr> 
              </thead> 
              <tbody> 
                 <?php  $i=1;
                 //echo '<pre>'; print_r($product);
                foreach($product as $ord){?>
                 
                <tr> 
                  <td><?php echo $i ?></td>
                           
                            <td><?php echo $ord['prod_name']?></td>
                            <td><?php echo $ord['prod_qty']?> <?php echo $ord['unit']?></td>
                            <td><?php echo $ord['unit_price']?>  <?php echo $ord['unit']?></td>
                            <td><i class="fa fa-rupee" style="font-size:15px;"></i> <?php echo $ord['total_price']?>/-</td>
                   </tr> 
              <?php
                  
                  $i++;
                } ?>
                <tr>
                    <th></th>
                  <th></th>
                  <th></th>
                  <th>Grand Total</th>
                  <th><i class="fa fa-rupee" style="font-size:15px;"></i> <?php echo $order['grand_total'];?>/- </th>
                </tr>
                <!-- <tr>
                    <th></th>
                  <th></th>
                  <th></th>
                  <th>Payment Method</th>
               
                  <th><?php echo $order['paid_method'];?> </th>
                </tr> -->
                 <!--  <tr>
                      <th></th>
                    <th></th>
                    <th></th>
                    <th>Delivery Address</th>
                    <th  rowspan="2"><?php echo $order['address'];?> </th>
                  </tr> -->
                 
                
                 
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
  targets: [4, 6]

  }]
});
  $('.dataTables_length').addClass('bs-select');
});
    </script>
    <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>