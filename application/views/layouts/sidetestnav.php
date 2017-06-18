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

        <li class="header"><b>Stock Section</b></li>

        <li id="Stock_section" class="treeview active">
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
    
        <li class="header"><b>Purchase Section</b></li>
        
        <li id="purchase_section1" class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>Debtors</span>
                 <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                 </span>
              </a>
              <ul class="treeview-menu">
                <li id="viewdebtors"><a  href="<?php echo base_url(); ?>debtors/debtors/view"><i class="fa fa-circle-o"></i> View Debtors</a></li>
                <li id="addebtors"><a href="<?php echo base_url(); ?>debtors/debtors/adddebtor"><i class="fa fa-circle-o"></i> Add Debtors</a></li>
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
                <li><a href="<?php echo base_url(); ?>pbills/pbills/view"><i class="fa fa-circle-o"></i> View Purchase Bills</a></li>
                <li><a href="<?php echo base_url(); ?>pbills/pbills/addpbills"><i class="fa fa-circle-o"></i> Add Purchase Bills</a></li>
               </ul>
        </li>

        <li id="purchase_section3"  class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Purchase Receipts</span>
                 <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                 </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>preceipts/preceipts/view"></i> View Preceipts</a></li>
                <li><a href="<?php echo base_url(); ?>preceipts/preceipts/addpreceipts"></i> Add Preceipts</a></li>
               </ul>
        </li>
        
      </ul>


        
   </section>
  
</aside>


