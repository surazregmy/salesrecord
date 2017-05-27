 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="header"><b>Stock Section</b></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>items/items/view"><i class="fa fa-circle-o"></i>View Items</a></li>
            <li><a href="<?php echo base_url();?>items/items/additem"><i class="fa fa-circle-o"></i>Add Items</a></li>
          </ul>
        </li>
    
    <li class="header"><b>Purchase Section</b></li>
    
        <li class="treeview active ">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Debtors</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a  href="<?php echo base_url(); ?>debtors/debtors/view"><i class="fa fa-circle-o"></i> View Debtors</a></li>
            <li><a href="<?php echo base_url(); ?>debtors/debtors/adddebtor"><i class="fa fa-circle-o"></i> Add Debtors</a></li>
           </ul>
        </li>
    
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Purchase Bills</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>pbills/pbills/view"><i class="fa fa-circle-o"></i> View Purchase Bills</a></li>
            <li><a href="<?php echo base_url(); ?>pbills/pbills/addpbills"><i class="fa fa-circle-o"></i> Add Purchase Bills</a></li>
           </ul>
        </li>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Purchase Receipts</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>preceipts/preceipts/view"></i> View Preceipts</a></li>
            <li><a href="<?php echo base_url(); ?>preceipts/preceipts/addpreceipts"></i> Add Preceipts</a></li>
           </ul>
        </li>
    
    <li class="header"><b>Sells Section</b></li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Creditors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>creditors/creditors/view"><i class="fa fa-circle-o"></i>View Creditors</a></li>
            <li><a href="<?php echo base_url(); ?>creditors/creditors/addcreditor"><i class="fa fa-circle-o"></i>Add Creditors</a></li>
          </ul>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sales Bills</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i>View Sale Bill</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Add Sale Bill</a></li>
          </ul>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Sales Receipts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> View S-Receipts</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Add S-Receipts</a></li>
          </ul>
        </li>
    
    <li class="header"><b>Report Section</b></li>
    
      <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Purchase Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> View Purchase Reports</a></li>
            <li><a href="<?php echo base_url(); ?>preports/view"><i class="fa fa-circle-o"></i> View Ledgers</a></li>
          </ul>
        </li>
    
          </section>
    <!-- /.sidebar -->
  </aside>
