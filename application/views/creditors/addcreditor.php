<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h4>आसामी </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Creditors</a></li>
        <li class="active">Add Creditor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Creditor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          

              <?php echo form_open('creditors/creditors/addcreditor'); ?>
                <table class="table table-bordered table-hover">
                  <tr>
                    <td>Creditor Name</td>
                    <td><input type="text" name="creditor_name" required="required" class="form-control" ></td>
                  </tr>
                   <tr>
                    <td>Creditor Address</td>
                    <td><input type="text" name="creditor_address" required="required" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Creditor Contact</td>
                    <td><input type="number" min="0" name="creditor_contact" required="required" type="number" class="form-control" ></td>
                  </tr>
                  <tr>
                    <td colspan = "2"><input class ="btn btn-primary" type="submit" name="submit" value="Add Creditor"></td>
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