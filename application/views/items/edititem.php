<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>सामान</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Items</a></li>
        <li class="active">Edit Items</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Items</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            

              <?php echo form_open('items/items/updateitem'); ?>
                <input type="hidden" name="id" value="<?php echo($item['items_id']);?>">
                <table class="table table-bordered table-hover">
                  <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="form-control" value="<?php echo($item['items_name']) ?>"></td>
                  </tr>
                   <tr>
                    <td>Category</td>
                    <td><input type="text" name="category" required="required" value="<?php echo($item['items_category']) ?>" ></td>
                  </tr>
                  <tr>
                    <td>Quantity</td>
                    <td><input type="number" min="0" name="quantity" required="required" type="number" value="<?php echo($item['items_quantity']) ?>"></td>
                  </tr>
                   <tr>
                    <td>Cost Price</td>
                    <td><input type="number" min="0.01" step="0.01" name="cp" required="required" value="<?php echo($item['items_cp']) ?>"></td>
                  </tr>
                   <tr>
                    <td>Selling Price</td>
                    <td><input type="number" min="0.01" step="0.01" name="sp" required="required" value="<?php echo($item['items_sp']) ?>"></td>
                  </tr>
                   <tr>
                    <td>Discount Rate</td>
                    <td><input type="number"min="0.01" step="0.01" name="dr" required="required" value="<?php echo($item['items_dp']) ?>"></td>
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