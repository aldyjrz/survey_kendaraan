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
            <div class="row">
              <div class="col-md-12">

                <form action="<?= base_url('Survey/post_gejala') ?>" method="POST">



                  <div class="form-group gejala" id="gejala">
                    <label class="font-weight-bold text-uppercase">PILIH GEJALA</label>

                    <?php
                    foreach ($rusak as $dat) {
                    ?>
                      <div class="form-check">

                        <input class="form-check-input" type="checkbox" name="gejala[]" id="gejala<?= $dat->kode_gejala ?>" value="<?= $dat->kode_gejala ?>">
                        <label class="form-check-label" for="gejala<?= $dat->kode_gejala ?>">
                          <?= $dat->gejala ?>
                        </label>
                      </div>
                      <br>
                    <?php
                    }
                    ?>

<input class="btn btn-primary" type="submit" value="Selesai"/>

                  </div>



              </div>

              </form>
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
  $(document).ready(function() {

  });
</script>