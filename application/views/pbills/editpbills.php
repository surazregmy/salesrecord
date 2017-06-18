
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h4>
        खरिद बिल
      </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pbills</a></li>
        <li class="active">Edit Pbills</li>
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

<?php $attributes = array('class' => 'form-horizontal myform'); ?>
      <?php echo form_open('pbills/pbills/updatepbills', $attributes); ?>

<!-- Pbills_id is primary key-->
    <input type="hidden" name="pbills_id" value="<?php echo($pbills_items[0]['pbills_id']);?>">
 

      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <!-- <form class="form-horizontal"> -->


              <div class="box-body">

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Debtors Name :</label>

                  <div class="col-sm-9">

                    <select name = "debtor_id" class="form-control select2">
                       <?php foreach($debtors as $debtor): ?>

                        <?php if(strcmp($pbills_items[0]['name'], $debtor['name'])==0): ?>
                          <option value="<?php echo $debtor['id'] ?>" selected="selected"> <?php echo $debtor["name"] ?></option>
                       <?php else: ?>
                        <option value="<?php echo $debtor['id'] ?>"> <?php echo $debtor['name']?></option>
                        <?php endif?>

                      <?php endforeach ?>
                      
                      
                    </select>

                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Bill No :</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="pbill_no" value="<?php echo $pbills_items[0]['original_id'] ?>" required="required">
                  </div>
                </div>
                <!-- Pbills_no is name for original key-->

                

                <div class="form-group">
                  <label class="col-sm-3 control-label">Date:</label>

                  <div class="col-sm-9">
                  <div class="input-group date ">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="pdate" class="form-control pull-right" id="datepicker" required="required" value="<?php echo $pbills_items[0]['purchase_date'] ?>">
                  </div>
                  <!-- /.input group -->
                </div>

              </div>

              <div class="form-group">
                  <label  class="col-sm-3 control-label">Entered By:</label>



                  <div class="col-sm-9">
                    <input type="text" disabled="disabled" class="form-control" name="entered_by" value="<?php echo ucfirst($pbills_items[0]['entered_by']) ?>" >
                    <input type="hidden" class="form-control" name="entered_by" value="<?php echo $pbills_items[0]['entered_by'] ?>" >
                  </div>
                </div>

                
              <!-- /.box-body -->

         </div>  
      </div>
      <div class="col-sm-6">
          

                  <div class="col-sm-4">
                    <input type="text"  class="form-control " name="total_amount" id="total_amount" value="<?php echo $pbills_items[0]['total_amount'] ?>" >
                  </div>    
      </div>
    

    <?php  $j = 0; ?>
    

    <?php foreach($pbills_items as $pbills_item ): $j++ ?>
      
        <?php foreach($items as $item): ?>
             <?php if(strcmp($pbills_item['items_name'],$item['items_name'])==0): ?>
                   <input type="hidden" name="<?php echo 'hid_itemid'.$j ; ?>" value="<?php echo($item['items_id']);?>">
              <?php endif?>    
          <?php endforeach ?>
       <?php endforeach ?>   

       <input type="hidden" name="no_of_rows" value="<?php echo($j);?>">

     
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th>SN</th>
              <th>Items Name</th>
              <th>Quantity</th>
              <th>Rate</th>
              <th>Total</th>
               <th><input type="button" value="+" id="add" class="btn btn-primary"></th> 
            </tr>
            </thead>
            <tbody class="detail">

            <?php $i = 0?>
            <?php foreach($pbills_items as $pbills_item ): $i++ ?>


            <tr>
              <td><?php echo $i ?></td>
              <td >
                   <select name = "<?php echo('item'.$i); ?>" class="select2" style="width: 100%;">
                       <?php foreach($items as $item): ?>
                        <?php if(strcmp($pbills_item['items_name'],$item['items_name'])==0): ?>
                                  <option value="<?php echo $item['items_id'] ?>" selected="selected"><?php echo $item['items_name'];?></option>   
                        <?php else: ?>   
                              <option value="<?php echo $item['items_id'] ?>"><?php echo $item['items_name'];?></option>   
                        <?php endif?>    
                        <?php endforeach ?>
                    </select>
              </td>
              <td><input type="text"  name="<?php echo('quantity'.$i); ?>" class="quantity" value="<?php echo $pbills_item['quantity'] ?>"></td>
              <td><input type="text"  name="<?php echo('price'.$i); ?>" class="rate" value="<?php echo $pbills_item['price'] ?>"></td>
              <td><input type="text"  name="<?php echo('total'.$i); ?>" class="total" value="<?php echo $pbills_item['total'] ?>"></td>
              </form>
            </tr>

             <?php endforeach?>  

            

            <tfoot>
                <tr>
                  <th></th>
                  <th> <input type="submit" name="" class="form-group btn btn-primary" value="Submit"></th>
                  <th></th>
                  <th>Grand Total</th>
                  <th class="grandtotal"></th>
                </tr>
            </tfoot>



            
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
       </div>


<?php echo form_close(); ?>
  


     

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> 
        </div>
      </div>
    </section>
   
    <div class="clearfix"></div>
  
</div>

