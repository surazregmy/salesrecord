<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        This is itemlist
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        
        <div class="box-body">
          <h2> This is the item list </h2>
         
         <?php foreach($items as $item): ?>
            <h3><?php echo $item['items_name']; ?> </h3>
         <?php endforeach?>


        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

<!-- this  is the data table previous-->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stock List
        <small>Items Details</small>
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
              <h3 class="box-title">Item Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
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
                    <td><a href='delete_user.php?user_id={$userSet['user_id']}'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='delete_user.php?user_id={$userSet['user_id']}'><img src="<?php echo base_url(); ?>assets/dist/img/delete_icon.png" height="25" width="25"></td>
                    
                  </tr>
                <?php endforeach?>  
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>



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
                    <td><a href='delete_user.php?user_id={$userSet['user_id']}'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='delete_user.php?user_id={$userSet['user_id']}'><img src="<?php echo base_url(); ?>assets/dist/img/delete_icon.png" height="25" width="25"></td>
                    
                  </tr>
                <?php endforeach?>  
                
              </table>


---------
<?php foreach($pbills as $pbill): ?>
                    
                 <tr>
                   
                    <td><?php echo $pbill['pbills_id']; ?></td>
                    <td><?php echo $pbill['original_id']; ?></td>
                    <td><?php echo $pbill['debtors_id']; ?></td>
                    <td> <?php echo $pbill['purchase_date']; ?></td>
                    <td><?php echo $pbill['entered_by']; ?></td>
                    <td><?php echo $pbill['status']; ?></td>
                   
                    <td><a href='edititem/<?php echo $item['items_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/edit_icon.png" height="25" width="25"></td>
                    <td><a href='deleteitem/<?php echo $item['items_id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>
                    
                  </tr>
                <?php endforeach?> 

                ---------------------------------------------------------------------
  <?php if($data['pbills_items'][0]['name'] == $debtor['name']) : ?>
                            <option value="<?php echo $debtor['id'] ?>"><?php echo "HIK";?></option>
                          <?php else: ?>
                                  <option value="<?php echo $debtor['id'] ?>"><?php echo "Hi";?></option>     
  <?php endif ?>




        

  //    for ($i=$starting_index_for_row; $i < count($_POST); $i+=4) { 

      
  //      $one_row = array_slice($_POST,$i,4);

  //      if($current_no_of_rows == $_POST['no_of_rows']){
      
  //          if (!(in_array(null, $one_row))) {

  //            $hidden_item = "hid_itemid".$j;

  //              $k = array_keys($one_row);
  //              echo "<pre>";
  //              print_r($one_row);

                
  //            $data = array(
  //                'pbills_id'=> $pbill_id,
  //                'items_id' =>$one_row[$k[0]],
  //                'quantity' =>$one_row[$k[1]],
  //                 'price' =>$one_row[$k[2]],
  //                 'total' =>$one_row[$k[3]]
  //              );

  //            $query = "pbills_id = ".$pbill_id." AND items_id=".$_POST[$hidden_item];
  //            echo $query;
  //            $this->db->where($query);
  //            $this->db->update('pbills_items',$data);
  //            $j++; 
  //          }

 //         }
 //       else{
              


  //        for ($i=$starting_index_for_row; $i < $first_range; $i+=4) {

  //              $one_row = array_slice($_POST,$i,4);

  //            if($current_no_of_rows == $_POST['no_of_rows']){
      
  //              if (!(in_array(null, $one_row))) {

  //                $hidden_item = "hid_itemid".$j;

  //                  $k = array_keys($one_row);
  //                  echo "<pre>";
  //                  print_r($one_row);

                    
  //                $data = array(
  //                    'pbills_id'=> $pbill_id,
  //                    'items_id' =>$one_row[$k[0]],
  //                    'quantity' =>$one_row[$k[1]],
  //                     'price' =>$one_row[$k[2]],
  //                     'total' =>$one_row[$k[3]]
  //                  );

  //                $query = "pbills_id = ".$pbill_id." AND items_id=".$_POST[$hidden_item];
  //                echo $query;
  //                $this->db->where($query);
  //                $this->db->update('pbills_items',$data);
  //                $j++; 
  //              }
  //            }
  //        }

  //        for ($i=$first_range; $i <count($_POST) ; $i+=4) {

  //          $one_row = array_slice($_POST,$i,4);
      
  //          if (!(in_array(null, $one_row))) {
  //              $k = array_keys($one_row);

  //            $data = array(
  //                'pbills_id'=> $pbill_id,
  //                'items_id' =>$one_row[$k[0]],
  //                'quantity' =>$one_row[$k[1]],
  //                 'price' =>$one_row[$k[2]],
  //                 'total' =>$one_row[$k[3]]
  //              );
  //            echo "<pre>";
  //            print_r($data);
  //            $this->db->insert('pbills_items',$data);
          
 //                  }

  //             }


  //          }

    


    <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
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
                    <td><a href='deletedebtor/<?php echo $debtor['id']; ?>'><img src="<?php echo base_url(); ?>assets/dist/img/delete_iconr.png" height="25" width="25"></td>

                  </tr>
                </tbody>
                <?php endforeach?>
                
              </table>

            </div>