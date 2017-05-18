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