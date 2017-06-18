
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        खरिद बिल
      </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pbills</a></li>
        <li class="active">Add Pbills</li>
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
            <?php echo form_open('pbills/pbills/savepbills', $attributes); ?>

<div class="row invoice-info">
        <div class="col-sm-9 invoice-col">
              <div class="box-body">

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Creditors Name:</label>
                  <div class="col-sm-9">
                        <select name = "creditor_id" class="form-control select2">
                        <option disabled selected>Select your option</option>
                       <?php foreach($creditors as $creditor): ?>
                                  <option value="<?php echo $creditor['cid'] ?>"><?php echo $creditor['creditor_name'];?></option>
                                  
                        <?php endforeach ?>
                    </select>
                    </select>
                 </div>
                </div>
                </div>
              

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Bill No :</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="pbill_no" required="required">
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Date:</label>

                  <div class="col-sm-9">
                    <div class="input-group date ">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" name="pdate" class="form-control pull-right" id="datepicker" required="required">
                    </div>
                  <!-- /.input group -->
                   </div>

                </div>

              <div class="form-group">
                  <label  class="col-sm-3 control-label">Type:</label>

                  <div class="col-sm-9">
                    <select name = "creditor_id" class="form-control select2">
                      <option>Credit</option>
                      <option>Cash</option>
                      <option>Half Paid</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label  class="col-sm-3 control-label">Entered By:</label>

                  <div class="col-sm-9">
                    <input type="hidden"  class="form-control" name="entered_by" value="<?php echo(ucfirst($this->session->userdata('username'))); ?>" >
                    <input type="text" disabled="disabled"  class="form-control" name="entered_by" value="<?php echo(ucfirst($this->session->userdata('username'))); ?>" >
                  </div>
              </div>

                
              <!-- /.box-body -->

         
       

        <!-- This is hidden for total amount -->
      <div class="col-sm-6">
          

                  <div class="col-sm-4">
                    <input type="hidden"  class="form-control " name="total_amount" id="total_amount" >
                  </div>    
      </div>
    
   

      <div class="row">
        <div class="col-xs-12">
          <h5 class="page-header">
            
          </h5>
        </div>
        <!-- /.col -->
      </div>
  </div>
  </div>
  

      
     
  <div class="row">
     <div class="col-xs-12 table-responsive">
       <table class="table">
          <thead>
            <tr>
              <th>SN</th>
              <th>Items Name</th>
              <th>Quantity</th>
              <th>Rate</th>
              <th>Discount(%)</th>
              <th>Total <?php echo(str_repeat('&nbsp;', 5));?> <input type="button" value="+" id="add" class="btn btn-primary"></th>
            
            </tr>
          </thead>
          <tbody class="detail">
            <tr>
              <td>1</td>
              <td >
                   <select name = "item1" class="select2" style="width: 100%;">
                       <?php foreach($items as $item): ?>
                                  <option value="<?php echo $item['items_id'] ?>"><?php echo $item['items_name'];?></option>          
                        <?php endforeach ?>
                    </select>
              </td>
              <td><input type="text"  name="quantity1" class="quantity"></td>
              <td><input type="text"  name="rate1" class="rate"></td>
              <td><input type="text"  name="discount1" class="discount"></td>
              <td><input type="text"  name="total1" class="total"></td>
              </form>
            </tr>

            <tr>
              <td>2</td>
              <td>
                   <select name = "item2" class="select2" style="width: 100%;">
                       <?php foreach($items as $item): ?>
                                  <option value="<?php echo $item['items_id'] ?>"><?php echo $item['items_name'];?></option>          
                        <?php endforeach ?>
                    </select>
              </td>
              <td><input type="text"  name="quantity2" class="quantity"></td>
              <td><input type="text"  name="rate2" class="rate"></td>
              <td><input type="text"  name="discount2" class="discount"></td>
              <td><input type="text"  name="total2" class="total"></td>
              </form>
            </tr>
            

            <tfoot>
            <tr>
                  <th></th>
                  <th></th>
                  <th>Grand Total</th>
                  <th class="grandtotal"></th>
                  <th>Final Discount(Rs.)</th>
                  <th><input type="text"  name="final_discount" class="total"></th>
                  
            </tr>
                <tr>
                  <th></th>
                  <th> <input type="submit" name="" class="form-group btn btn-primary" value="Submit"></th>
                  <th></th>
                  <th></th>
                  <th>Grand Total</th>
                  <th class="grandtotal"></th>
                </tr>
            </tfoot>



            
          </tbody>
       </table>
      </div>
        <!-- /.col -->


<?php echo form_close(); ?>
</section>
</div>
   
   

