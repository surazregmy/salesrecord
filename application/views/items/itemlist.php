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
                  <th>Items ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Quantity</th>
                  <th>BP</th>
                  <th>SP</th>
                  <th>Discount</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($items as $item): ?>
                 <tr>
                    <td><?php echo $item['items_id']; ?></td>
                    <td><?php echo $item['items_name']; ?></td>
                    <td><?php echo $item['items_category']; ?></td>
                    <td> <?php echo $item['items_quantity']; ?></td>
                    <td><?php echo $item['items_cp']; ?></td>
                    <td><?php echo $item['items_sp']; ?></td>
                    <td><?php echo $item['items_dp']; ?></td>
                    
                    <td><a href='edititem/<?php echo $item['items_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='deleteitem/<?php echo $item['items_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>
                    
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