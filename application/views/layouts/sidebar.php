 <aside class="main-sidebar">

    
    <section class="sidebar">
     
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/shiva.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h5> Welcome <?php echo ucfirst($this->session->userdata('username')) ; ?>! </h5>
        </div>
      </div>
      
<ul id="sidebar-menu" class="sidebar-menu">

        <li id="stock_section" class="header"><b>Stock Section</b></li>
        <li id="stock_section1" class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewitem" class="active"><a href="<?php echo base_url(); ?>items/items/view"><i class="fa fa-circle-o"></i>View Items</a></li>
            <li id="additem"><a href="<?php echo base_url();?>items/items/additem"><i class="fa fa-circle-o"></i>Add Items</a></li>
          </ul>
        </li>
    
    <li id="purchase_section" class="header"><b>Purchase Section</b></li>
    
        <li id ="purchase_section1" class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Debtors</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewdebtors"><a  href="<?php echo base_url(); ?>debtors/debtors/view"><i class="fa fa-circle-o"></i> View Debtors</a></li>
            <li id="adddebtors"><a href="<?php echo base_url(); ?>debtors/debtors/adddebtor"><i class="fa fa-circle-o"></i> Add Debtors</a></li>
           </ul>
        </li>
    
        <li id="purchase_section2" class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Purchase Bills</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewpbills"><a href="<?php echo base_url(); ?>pbills/pbills/view"><i class="fa fa-circle-o"></i> View Purchase Bills</a></li>
            <li id="addpbills"><a href="<?php echo base_url(); ?>pbills/pbills/addpbills"><i class="fa fa-circle-o"></i> Add Purchase Bills</a></li>
           </ul>
        </li>

        <li id="purchase_section3" class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Purchase Receipts</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewpreceipts"><a href="<?php echo base_url(); ?>preceipts/preceipts/view"></i> View Preceipts</a></li>
            <li id="addpreceipts"><a href="<?php echo base_url(); ?>preceipts/preceipts/addpreceipts"></i> Add Preceipts</a></li>
           </ul>
        </li>
    
    <li id="sells_section" class="header"><b>Sells Section</b></li>
    
        <li id="sells_section1" class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Creditors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewcreditors"><a href="<?php echo base_url(); ?>creditors/creditors/view"><i class="fa fa-circle-o"></i>View Creditors</a></li>
            <li id="addcreditors"><a href="<?php echo base_url(); ?>creditors/creditors/addcreditor"><i class="fa fa-circle-o"></i>Add Creditors</a></li>
          </ul>
        </li>
    
        <li id="sells_section2" class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sales Bills</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewsbill"><a href="../forms/general.html"><i class="fa fa-circle-o"></i>View Sale Bill</a></li>
            <li id="addsbill"><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Add Sale Bill</a></li>
          </ul>
        </li>
    
        <li id="sells_section3" class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Sales Receipts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="viewsreceipts"><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> View S-Receipts</a></li>
            <li id="addsreceipts"><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Add S-Receipts</a></li>
          </ul>
        </li>
    
    <li id="Report_section" class="header"><b>Report Section</b></li>
    
      <li id="Report_section1" class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Purchase Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="view_purchase"><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> View Purchase Reports</a></li>
            <li id="viewledger"><a href="<?php echo base_url(); ?>preports/view"><i class="fa fa-circle-o"></i> View Ledgers</a></li>
          </ul>
        </li>

</ul>
    
          </section>
    <!-- /.sidebar -->

  </aside>
