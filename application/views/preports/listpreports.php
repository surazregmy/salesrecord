
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h4> लेजर  </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">PReports</a></li>
        <li class="active">Ledger</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
       <div class="row">
            <div class="col-xs-12">
              <h5 class="page-header">
                <i class="fa fa-globe"></i>लेजर 
                <small class="pull-right"> <b> <?php echo(date("Y/m/d"))?> </b> </small>
              </h5>
            </div>
            <!-- /.col -->
          </div>



      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        
        <div class="box-body">

        <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('preceipts/addpreceipts', $attributes); ?>
                    <div class="form-group">
                      <label  class="col-sm-3 control-label">Debtors Name :</label>

                      <div class="col-sm-9">
                        <select id="debt" name = "debtor_id" class="form-control select2 formdebtor">
                        <option value="" disabled selected>Select your option</option>
                           <?php foreach($debtors as $debtor): ?>
                                      <option value="<?php echo $debtor['id'] ?>"><?php echo $debtor['name'];?></option>
                                      
                            <?php endforeach ?>
                        </select>

                      </div>
                    </div>
          <?php echo form_close(); ?>

         </div>  
      </div>

       <div class="row">
          <div class="col-xs-12">
            <h5 class="page-header">
            </h5>
          </div>

        </div>


      <div class="row col-xs-12" id ="result">
      </div>
    
   </div>


  
  
    </section>
   
    <div class="clearfix"></div>
  
</div>

