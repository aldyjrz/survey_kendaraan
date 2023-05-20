<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-md-5">
                
              <div class="card rounded-top card-info">
                <div class="card-header">Selamat Datang, <?= $this->session->userdata("nama_lengkap")?></div>
                <div class="card-body">
                    <p>Silahkan klik tombol dibawah untuk memulai Survey Kendaraan </p>
                    <a href="<?= base_url('Survey')?>" class="btn btn-success text-dark rounded-top">Mulai Survey</a>
                </div>
            </div>
              
            </div>
          </div>
           
          </div>
        </section>
      </div>
<?php $this->load->view('_partials/footer'); ?>

<script>
 
</script>