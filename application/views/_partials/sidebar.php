<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>Home">SURVEY</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>">SK</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'admin' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>"><i class="fas fa-home"></i>  Dashboard</a> 
            </li>
 
            <?php if($_SESSION['level'] == "admin"){ 
              ?>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'admin'  ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Master Data</span></a>
              <ul class="dropdown-menu">
                 <li><a class="nav-link" href="<?php echo base_url(); ?>Admin/User">Master User</a></li>
                  <li><a class="nav-link" href="<?php echo base_url(); ?>Admin/Kerusakan">Master Kerusakan</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>Admin/Gejala">Master Gejala</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>Admin/Penyebab">Master Penyebab</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>Admin/Solusi">Master Solusi</a></li>


              </ul>
            </li>
            <?php } ?>
 
            <li class="menu-header">Survey</li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'Users/lap_survey' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>Users/lap_survey"><i class="fas fa-home"></i>  Mulai Survey</a> 
            <a class="nav-link" href="<?php echo base_url(); ?>/Survey"><i class="fas fa-home"></i>  Laporan Survey</a> 

            </li>
          
  </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo base_url(); ?>Auth/logout" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-power-off"></i> Keluar
            </a>
          </div>
        </aside>
      </div>
