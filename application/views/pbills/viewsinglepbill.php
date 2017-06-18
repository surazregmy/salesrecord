
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        खरिद बिल
      </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pbills</a></li>
        <li class="active">View Single Pbill</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
     <div class="row">
        <div class="col-xs-12">
          <h5 class="page-header">
            <i class="fa fa-globe"></i>खरिद बिल
            <small class="pull-right"> <b> <?php echo(date("Y/m/d"))?> </b> </small>
          </h5>
        </div>
        <!-- /.col -->
      </div>



      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <!-- <form class="form-horizontal"> -->


              <div class="box-body">
               <table class="table table-bordered">
                <tr>
                  
                  <td><b>Debtor's Name</b></td>
                  <td><?php  echo $pbills_items[0]['name']?></td>
                  
                </tr>
                 <tr>
                  
                  <td style="width: 130px"><b>Bill NO: </b></td>
                  <td><?php  echo $pbills_items[0]['original_id']?></td>
                  
                </tr>
                 <tr>
                  
                  <td><b>Date</b></td>
                  <td><?php  echo  $pbills_items[0] ['purchase_date']?></td>
                  
                </tr>
                <tr>
                  
                  <td><b>Entered By</b></td>
                  <td><?php  echo  $pbills_items[0] ['entered_by']?></td>
                  
                </tr>
                <tr>
                  
                  <td><b>Type</b></td>
                  <td><?php  echo  $pbills_items[0] ['status']?></td>
                  
                </tr>
                
              
              </table>

         </div>  
      </div>
    
     
      <div class="box-body">
      
        <div class="col-xs-12 table-responsive">
          <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SN</th>
                  <th>Items Name</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                 <?php $i = 0; ?>
                 <?php foreach($pbills_items as $pbills_item ): ?>
                  <?php  $i++ ?>
                  <tr>
                  <td><?php echo $i ?></td>
                  <td><?php  echo $pbills_item['items_name']?></td>
                  <td><?php  echo $pbills_item['quantity']?></td>
                  <td><?php  echo $pbills_item['price']?></td>
                  <td><?php  echo $pbills_item['total']?></td>
                  </tr>

                  
                <?php endforeach?>  
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Grand Total</th>
                  <th class="grandtotal"><?php echo $pbills_items[0]['total_amount'] ?></th>
                </tr>
            </tfoot>



                </tbody>

              </table>

               <div class=" col-xs-1">

                  <?php echo form_open('pbills/pbills/view') ?>
                      <input class="form-group btn btn-primary pull-middle" type="submit" name="Done" value="Done">
                  <?php echo form_close() ?>
              </div>

              <div class="col-xs-1">
                  <?php echo form_open('pbills/pbills/editpbills/'.$pbills_items[0]['pbills_id']); ?>
                  <input type="hidden" name="pbills_id" value="<?php echo  $pbills_items[0]['pbills_id'] ; ?>">
                  <input type="submit" name="" class="form-group btn btn-primary" value="Edit">
                  <?php echo form_close() ?>

              </div>

             
              
        </div>
   </div>
        <!-- /.col -->
   


  


     

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> 
        </div>
      </div>
    </section>
   
    <div class="clearfix"></div>
  
</div>

