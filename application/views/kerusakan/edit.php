<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Master Kerusakan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Master</a></div>
        <div class="breadcrumb-item">Master Kerusakan</div>
      </div>
    </div>

    <div class="section-body">


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              Data Kerusakan </div>
            <div class="card-body">

              <?php
              $message = $this->session->flashdata('message');
              if ($message != null) {  ?>
                <div class="alert alert-success  bg-dark p-2 ml-3 mr-3 w-50">
                <?php

                echo $message;
              } ?>
                </div>
                <form action="<?= base_url("Admin/Kerusakan/edit") ?>" method="POST">
                  <div class="form-group col-md-6">
                    <label>Kode Kerusakan</label>
                    <input type="hidden" name="id_kerusakan" required value="<?= $record[0]->id_kerusakan ?>">

                    <input type="text" name="kode_kerusakan" required value="<?= $record[0]->kode_kerusakan ?>" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Deskripsi Kerusakan</label>
                    <input type="text" name="kerusakan" value="<?= $record[0]->kerusakan ?>" required class="form-control">
                  </div>

            </div>

            <div class="form-group col-md-6">
              <input type="submit" name="submit" value="SIMPAN" class=" btn btn-primary">
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>
</div>
<?php $this->load->view('_partials/footer'); ?>