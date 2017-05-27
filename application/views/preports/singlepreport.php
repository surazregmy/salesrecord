


 
 <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>SN</th>
                  <th>Particulars</th>
                  <th>Debits(Rs.)</th>
                  <th>Credits(Rs.)</th>
                  
                </tr>
                </thead>
                <tbody>
            <?php $balance = 0 ?>

            <?php $j = count($preceipts)?>
            <?php for($i = 0; $i <count($pbills); $i++ ):  ?>
                  <?php $balance = $balance + $pbills[$i]['total_amount'] ?>
              <tr>
                  <td><?php echo($i*2+1) ?></td>
                  <td>Bill no:   <?php echo ($pbills[$i]['original_id']) ?></td>
                  <td>Rs. <?php echo ($pbills[$i]['total_amount']) ?></td> 
                  <td></td>
              </tr>
              <?php if($i<$j): ?>
                <tr>
                    <td><?php echo($i*2+2) ?></td>
                    <td>Receipt no: <?php echo ($preceipts[$i]['po_id']) ?></td>
                     <td></td>
                    <td>Rs. <?php echo ($preceipts[$i]['amount']) ?></td> 
                    <?php $balance = $balance  - $preceipts[$i]['amount']; ?>
                    
                </tr>
               <?php endif ?> 
              
            <?php endfor ?>
               
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th>Balance</th>
                  <th><?php echo($balance); ?></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
</div>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>