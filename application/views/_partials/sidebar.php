<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">WMS IA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">IA</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>dist/index"><i class="fas fa-home"></i>  Dashboard</a> 
            </li>
            <li class="menu-header">Menu</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'layout_default' || $this->uri->segment(2) == 'layout_transparent' || $this->uri->segment(2) == 'layout_top_navigation' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Master Data</span></a>
              <ul class="dropdown-menu">
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Login</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Pelanggan</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Cabang</a></li>

                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Kotak Pelanggan</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Jenis Kotak</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Mobil</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Lokasi</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Driver</a></li>
                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Label Kotak</a></li>

                 <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Master Stok Box Kosong</a></li> 

              </ul>
            </li>
             
            <li class="menu-header">Transaksi</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Transaksi Penerimaan</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">Data Kotak Detil</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_avatar' ? 'active' : ''; ?>"><a class="nav-link " href="<?php echo base_url(); ?>dist/components_avatar">Tanda Terima</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_chat_box' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_chat_box">Tanda Terima Box Kosong</a></li>
                 </ul>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Transaksi Peminjaman</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">Surat Jalan / SJTT</a></li>
                         </ul>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Transaksi Keluar Musnah</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">SJTT Keluar Pelanggan</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">SJTT KP Self Service</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">SJTT Pemusnahan</a></li>


                         </ul>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'modules_calendar' || $this->uri->segment(2) == 'modules_chartjs' || $this->uri->segment(2) == 'modules_datatables' || $this->uri->segment(2) == 'modules_flag' || $this->uri->segment(2) == 'modules_font_awesome' || $this->uri->segment(2) == 'modules_ion_icons' || $this->uri->segment(2) == 'modules_owl_carousel' || $this->uri->segment(2) == 'modules_sparkline' || $this->uri->segment(2) == 'modules_sweet_alert' || $this->uri->segment(2) == 'modules_toastr' || $this->uri->segment(2) == 'modules_vector_map' || $this->uri->segment(2) == 'modules_weather_icon' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'modules_calendar' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_calendar">Calendar</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_chartjs' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_chartjs">ChartJS</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_datatables' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_datatables">DataTables</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_flag' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_flag">Flag</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_font_awesome' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_font_awesome">Font Awesome</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_ion_icons' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_ion_icons">Ion Icons</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_owl_carousel' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_owl_carousel">Owl Carousel</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_sparkline' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_sparkline">Sparkline</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_sweet_alert' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_sweet_alert">Sweet Alert</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_toastr' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_toastr">Toastr</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_vector_map' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_vector_map">Vector Map</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modules_weather_icon' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_weather_icon">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>dist/auth_forgot_password">Forgot Password</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_login">Login</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_register">Register</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_reset_password">Reset Password</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_503">503</a></li> 
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_403">403</a></li> 
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_404">404</a></li> 
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_500">500</a></li> 
              </ul>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'features_activities' || $this->uri->segment(2) == 'features_post_create' || $this->uri->segment(2) == 'features_posts' || $this->uri->segment(2) == 'features_profile' || $this->uri->segment(2) == 'features_settings' || $this->uri->segment(2) == 'features_setting_detail' || $this->uri->segment(2) == 'features_tickets' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'features_activities' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_activities">Activities</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'features_post_create' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_post_create">Post Create</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'features_posts' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_posts">Posts</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'features_profile' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_profile">Profile</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'features_settings' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_settings">Settings</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'features_setting_detail' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_setting_detail">Setting Detail</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'features_tickets' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/features_tickets">Tickets</a></li>
              </ul>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'utilities_invoice' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>dist/utilities_contact">Contact</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'utilities_invoice' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/utilities_invoice">Invoice</a></li>
                <li><a href="<?php echo base_url(); ?>dist/utilities_subscribe">Subscribe</a></li>
              </ul>
            </li>
            <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>
