
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



      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <!-- <form class="form-horizontal"> -->


              <div class="box-body">
               <table class="table table-bordered">
                <tr>
                  
                  <td><b>Debtor's Name</b></td>
                  <td><?php  echo $pbills['debtors_id']?></td>
                  
                </tr>
                 <tr>
                  
                  <td style="width: 130px"><b>Bill NO: </b></td>
                  <td><?php  echo $pbills['original_id']?></td>
                  
                </tr>
                 <tr>
                  
                  <td><b>Date</b></td>
                  <td><?php  echo $pbills['purchase_date']?></td>
                  
                </tr>
                <tr>
                  
                  <td><b>Entered By</b></td>
                  <td><?php  echo $pbills['entered_by']?></td>
                  
                </tr>
                <tr>
                  
                  <td><b>Type</b></td>
                  <td>Cr.</td>
                  
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
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>    
                </tbody>
              </table>
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

