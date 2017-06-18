
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h3>साहु </h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Debtors</a></li>
        <li class="active">View Debtors</li>
      </ol>
    </section>

 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Debtors List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Debtors_ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i =0;?>
                <?php foreach($debtors as $debtor): ?>
                <?php $i++; ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $debtor['name']; ?></td>
                    <td><?php echo $debtor['address']; ?></td>
                    <td> <?php echo $debtor['contact']; ?></td>
                    
                    <td><a href='editdebtor/<?php echo $debtor['id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='deletedebtor/<?php echo $debtor['id']; ?>' onclick="return confirm('डिलिट गर्ने हो ?');"><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>

                  </tr>
                <?php endforeach?>
                </tbody>
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
  
    
  </div>
 