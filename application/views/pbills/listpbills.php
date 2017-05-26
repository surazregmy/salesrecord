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
                  <th>Pbills ID</th>
                  <th>Original Bill ID</th>
                  <th>Debtors Name </th>
                  <th>Purchase Date</th>
                  <th>Entered BY</th>
                  <th>Status</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
                </tr>
                </thead>
                <tbody>
               
                <?php foreach($pbills as $pbill): ?>
                    <?php foreach($debtors as $debtor): ?>
                      <?php if($pbill['debtors_id'] == $debtor['id']) {?>
                 <tr>
                    <td><?php echo $pbill['pbills_id']; ?></td>
                    <td><a href=" viewsinglepbill/<?php echo $pbill['pbills_id'] ?>"> <?php echo $pbill['original_id']; ?></td>
                    <td><?php echo $debtor['name']; ?></td>
                    <td> <?php echo $pbill['purchase_date']; ?></td>
                    <td><?php echo $pbill['entered_by']; ?></td>
                    <td><?php echo $pbill['status']; ?></td>
                  
                    
                    <td><a href='editpbills/<?php echo $pbill['pbills_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='deletepbills/<?php echo $pbill['pbills_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>
                    
                  </tr>
                  <?php } ?> 
                  <?php endforeach?> 
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