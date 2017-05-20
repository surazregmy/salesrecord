<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Add Items</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Items</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>Hello This is me Gentleman</p>

              <?php echo form_open('items/items/additem'); ?>
                <table class="table table-bordered table-hover">
                  <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" ></td>
                  </tr>
                   <tr>
                    <td>Category</td>
                    <td><input type="text" name="category" required="required"></td>
                  </tr>
                  <tr>
                    <td>Quantity</td>
                    <td><input type="number" min="0" name="quantity" required="required" type="number" ></td>
                  </tr>
                   <tr>
                    <td>Cost Price</td>
                    <td><input type="number" min="0.01" step="0.01" name="cp" required="required"></td>
                  </tr>
                   <tr>
                    <td>Selling Price</td>
                    <td><input type="number" min="0.01" step="0.01" name="sp" required="required"></td>
                  </tr>
                   <tr>
                    <td>Discount Rate</td>
                    <td><input type="number" min="0.01" step="0.01" name="dr" required="required"></td>
                  </tr>
                  <tr>
                    <td colspan = "2"><input class ="btn btn-default" type="submit" name="submit"></td>
                    <td></td>
                  </tr>
                </table>

              </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->