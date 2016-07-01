  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
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
        <li class="header">MAIN NAVIGATION</li>

        <li>
          <a href="<?php echo base_url(); ?>Pages/n/dashboard">
            <i class="fa fa-th"></i> <span>Dashboard</span>
            <!-- <small class="label pull-right bg-green">new</small> -->
          </a>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>Pages/n/production_lati">
            <i class="fa fa-gear"></i> <span>Production</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Pages/n/production_lati"><i class="fa fa-circle-o"></i> Lati</a></li>
            <li><a href="<?php echo base_url(); ?>Pages/n/production_binungan"><i class="fa fa-circle-o"></i> Binungan</a></li>
            <li><a href="<?php echo base_url(); ?>Pages/n/production_sambarata"><i class="fa fa-circle-o"></i> Sambarata</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>Pages/sr/lati">
            <i class="fa fa-gear"></i> <span>Stripping Ratio</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Pages/sr/lati"><i class="fa fa-circle-o"></i> Lati</a></li>
            <li><a href="<?php echo base_url(); ?>Pages/sr/binungan"><i class="fa fa-circle-o"></i> Binungan</a></li>
            <li><a href="<?php echo base_url(); ?>Pages/sr/sambarata"><i class="fa fa-circle-o"></i> Sambarata</a></li>
          </ul>
        </li>
        <li class="hidden">
          <a href="<?php echo base_url(); ?>Pages/n/stockpile">
            <i class="fa fa-industry"></i> <span>Stockpile</span>
          </a>
        </li>
      </section>
      <!-- /.sidebar -->
    </aside>
    <body>