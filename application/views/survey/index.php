<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="card rounded-top card-info">
          <div class="card-header">Selamat Datang, <?= $this->session->userdata("nama_lengkap") ?></div>
          <div class="card-body">

            <p class="font-weight-bold uppercase">Silahkan Pilih Jenis Diagnosa Kerusakan</p>
            <div class="form-group">
              <a href="<?= base_url()?>Survey/gejala" class="btn btn-warning">Diagnosa Berdasarkan Gejala</a>
            </div>
            <div class="form-group">

              <a href="<?= base_url()?>Survey/kerusakan" class="btn btn-primary">Diagnosa Berdasarkan Kerusakan</a>

            </div>


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