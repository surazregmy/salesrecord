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
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <form class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Debtors Name :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="debtors_name">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Bill No :</label>

                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="pbill_no">
                  </div>
                </div>

                

              <div class="form-group">
                <label class="col-sm-3 control-label">Date:</label>

                <div class="col-sm-9">
                <div class="input-group date ">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              </div>

              <div class="form-group">
                  <label  class="col-sm-3 control-label">Entered By:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="pbill_no" value="SURAJ">
                  </div>
                </div>

                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info ">ADD PBill</button>
              </div>
              <!-- /.box-footer -->
           
          
        </div>  
      </div>
      <!-- /.row -->

      <!-- Table row -->
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
            <tr>
              <td>1</td>
              <td><input type="text"  name="items_name1" ></td>
              <td><input type="text"  name="quantity1"></td>
              <td><input type="text"  name="rate1"></td>
              <td><input type="text"  name="total1"></td>
            </tr>
            <tr>
              <td>2</td>
              <td><input type="text"  name="items_name2" ></td>
              <td><input type="text"  name="quantity2"></td>
              <td><input type="text"  name="rate2"></td>
              <td><input type="text"  name="total2"></td>
            </tr>
            <tr>
              <td>3</td>
              <td><input type="text"  name="items_name3" ></td>
              <td><input type="text"  name="quantity3"></td>
              <td><input type="text"  name="rate3"></td>
              <td><input type="text"  name="total3"></td>
            </tr>
           <tr>
              <td>4</td>
              <td><input type="text"  name="items_name3" ></td>
              <td><input type="text"  name="quantity3"></td>
              <td><input type="text"  name="rate3"></td>
              <td><input type="text"  name="total3"></td>
            </tr>
            <tr>
              <td>5</td>
              <td><input type="text"  name="items_name3" ></td>
              <td><input type="text"  name="quantity3"></td>
              <td><input type="text"  name="rate3"></td>
              <td><input type="text"  name="total3"></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
       </form>

   

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> 
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>

