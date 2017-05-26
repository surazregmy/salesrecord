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
                  <th>S.N</th>
                  <th>PReceipt No</th>
                  <th>Debtors</th>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Entered By</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0;?>
                <?php foreach($preceipts as $preceipt): ?>
                    <?php  $i++ ?>
                 <tr>
<!--                    <td>--><?php //echo $item['items_id']; ?><!--</td>-->
                    <td><?php echo $i; ?></td>
                    <td><?php echo $preceipt['po_id']; ?></td>
                    <td><?php echo $preceipt['debtors_id']; ?></td>
                    <td> <?php echo $preceipt['date']; ?></td>
                    <td><?php echo $preceipt['amount']; ?></td>
                    <td><?php echo $preceipt['entered_by']; ?></td>
                    
                    
                    <td><a href='editpreceipt/<?php echo $preceipt['preceipts_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='deletepreceipt/<?php echo $preceipt['preceipts_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>
                    
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