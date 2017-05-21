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
        <li class="active">Edit Debtor</li>
      </ol>
    </section>

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

                          <?php echo form_open('debtors/debtors/updatedebtor'); ?>
                          <input type="hidden" name="id" value="<?php echo($debtor['id']);?>">
                          <table class="table table-bordered table-hover">
                              <tr>
                                  <td>Name</td>
                                  <td><input type="text" name="name" required="required"class="form-control" value="<?php echo($debtor['name']) ?>"></td>
                              </tr>
                              <tr>
                                  <td>Address</td>
                                  <td><input type="text" name="address" required="required"class="form-control" value="<?php echo($debtor['address']) ?>" ></td>
                              </tr>
                              <tr>
                                  <td>Contact</td>
                                  <td><input type="text" name="contact" required="required" class="form-control"value="<?php echo($debtor['contact']) ?>" ></td>
                              </tr>
                              <tr>
                                  <td colspan = "2"><input class ="btn btn-primary" type="submit" name="submit" value="Update Debtor"></td>
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