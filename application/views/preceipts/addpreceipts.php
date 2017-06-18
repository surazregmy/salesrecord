
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>खरिद पैसा भुक्तानी  </h4>
       
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">PReceipts</a></li>
        <li class="active">Add Preceipts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
     <div class="row">
        <div class="col-xs-12">
          <h5 class="page-header">
            <i class="fa fa-globe"></i>खरिद पैसा भुक्तानी 
            <small class="pull-right"> <b> <?php echo(date("Y/m/d"))?> </b> </small>
          </h5>
        </div>
        <!-- /.col -->
      </div>

<?php $attributes = array('class' => 'form-horizontal'); ?>
      <?php echo form_open('preceipts/addpreceipts', $attributes); ?>

      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        
              <div class="box-body">

                

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Bill No :</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="po_id" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Debtors Name :</label>

                  <div class="col-sm-9">
                    <select name = "debtor_id" class="form-control select2">
                    <option value="" disabled selected>Select your option</option>
                       <?php foreach($debtors as $debtor): ?>
                                  <option value="<?php echo $debtor['id'] ?>"><?php echo $debtor['name'];?></option>
                                  
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
                    <input type="date" name="paid_date" class="form-control pull-right" id="datepicker" required="required">
                  </div>
                  <!-- /.input group -->
                </div>

              </div>

              <div class="form-group">
                  <label  class="col-sm-3 control-label">Amount:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="amount">
                  </div>
                </div> 


              <div class="form-group">
                  <label  class="col-sm-3 control-label">Entered By:</label>

                  <div class="col-sm-9">
                   <input type="hidden" class="form-control" name="entered_by" value="<?php echo ucfirst($this->session->userdata('username')); ?>" >
                   <input type="text" disabled ="disabled" class="form-control" name="entered_by" value="<?php echo ucfirst($this->session->userdata('username')); ?>" >
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

