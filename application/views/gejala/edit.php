<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Master Gejala</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Master</a></div>
        <div class="breadcrumb-item">Master Gejala</div>
      </div>
    </div>

    <div class="section-body">


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              Data Gejala </div>
            <div class="card-body">

              <?php
              $message = $this->session->flashdata('message');
              if ($message != null) {  ?>
                <div class="alert alert-success  bg-dark p-2 ml-3 mr-3 w-50">
                <?php

                echo $message;
              } ?>
                </div>
                <form action="<?= base_url("Admin/Gejala/edit") ?>" method="POST">
                  <div class="form-group col-md-6">
                    <label>Kode Gejala</label>
                    <input type="hidden" name="id_gejala" required value="<?= $record[0]->id_gejala ?>">

                    <input type="text" name="kode_gejala" required value="<?= $record[0]->kode_gejala ?>" class="form-control">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Deskripsi Gejala</label>
                    <textarea type="text" name="gejala" value="<?= $record[0]->gejala ?>" required class="form-control"><?= $record[0]->gejala ?></textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Jenis Kerusakan</label>
                    <select name="kode_kerusakan" required class="form-control">
                      <option value=""> -- Pilih -- </option>

                      <?php
                      echo json_encode($rusak);
                        foreach($rusak as $dat){

                          if($record[0]->kode_kerusakan == $dat->kode_kerusakan){
                            $s = "selected";
                          }else{
                            $s= "";
                          }
                          ?>
                      <option <?= $s ?> value="<?=$dat->kode_kerusakan?>"> <?=$dat->kode_kerusakan?> -<?=$dat->kerusakan?> </option>

                          <?php
                        }
                      ?>

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Penyebab</label>
                    <select name="kode_penyebab" required class="form-control">
                      <option value=""> -- Pilih -- </option>

                      <?php
                         foreach($penyebab as $bab){

                          if($record[0]->kode_penyebab == $bab->kode_penyebab){
                            $s = "selected";
                          }else{
                            $s= "";
                          }
                          ?>
                      <option <?= $s ?> value="<?=$bab->kode_penyebab?>"> <?=$bab->kode_penyebab?> -<?=$bab->penyebab?> </option>

                          <?php
                        }
                      ?>

                    </select>
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