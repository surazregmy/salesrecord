
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#007612</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> AdminLTE, Inc.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

<?php $attributes = array('class' => 'form-horizontal'); ?>
      <?php echo form_open('preceipts/updatepreceipt', $attributes); ?>
      <input type="hidden" name="preceipts_id" value="<?php echo $preceipt['preceipts_id']?>">

      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        
              <div class="box-body">

                

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Bill No :</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="po_id" required="required" value="<?php echo $preceipt['po_id']?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Debtors Name :</label>

                  <div class="col-sm-9">
                    <select name = "debtor_id" class="form-control select2">
                    <option value="" disabled selected>Select your option</option>

                   <?php foreach($debtors as $debtor): ?>

                        <?php if($preceipt['debtors_id'] === $debtor['id']): ?>
                          <option value="<?php echo $debtor['id'] ?>" selected="selected"> <?php echo $debtor['name']?></option>
                       <?php else: ?>
                        <option value="<?php echo $debtor['id'] ?>"> <?php echo $debtor['name']?></option>
                        <?php endif?>

                      <?php endforeach ?>
                    </select>

                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-3 control-label">Date:</label>

                  <div class="col-sm-9">
                  <div class="input-group date ">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="paid_date" class="form-control pull-right" id="datepicker" required="required" value="<?php echo $preceipt['date']?>">
                  </div>
                  <!-- /.input group -->
                </div>

              </div>

              <div class="form-group">
                  <label  class="col-sm-3 control-label">Amount:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="amount" value="<?php echo $preceipt['amount']?>">
                  </div>
                </div> 


              <div class="form-group">
                  <label  class="col-sm-3 control-label">Entered By:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="entered_by" value="SURAJ" >
                  </div>
              </div>  

              <div class="form-group">
                  <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary form-control"  value="submit" >
                  </div>
              </div>  

         </div>  
      </div>
    
   </div>

<?php echo form_close(); ?>
  
  
    </section>
   
    <div class="clearfix"></div>
  
</div>
