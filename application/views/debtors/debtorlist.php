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
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Debtors_ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($debtors as $debtor): ?>
                 <tr>
                    <td><?php echo $debtor['id']; ?></td>
                    <td><?php echo $debtor['name']; ?></td>
                    <td><?php echo $debtor['address']; ?></td>
                    <td> <?php echo $debtor['contact']; ?></td>
                    
                    <td><a href='debtors/editdebtor/<?php echo $item['id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='delete_user.php?user_id={$userSet['user_id']}'><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>
                    
                  </tr>
                <?php endforeach?>
                
              </table>

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