<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
                    <h4> Tambah Penyebab & Solusi </h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url("Admin/Penyebab/edit") ?>" method="POST">
                    <div class="form-group col-md-6">
                    <label>Kode Penyebab</label>
                  <input type="text" name="kode_penyebab" value="<?= $record[0]->kode_penyebab?>" placeholder="Contoh : P0069" required class="form-control"></input>
                  <input type="hidden" name="id_penyebab" value="<?= $record[0]->id_penyebab?>"></input>

                      </div>
                    <div class="form-group col-md-6">
                    <label>Kode Kerusakan</label>
                    <select name="kode_kerusakan" required class="form-control">

                    <?php
                         foreach($rusak as $dat){
                          if($dat->kode_kerusakan == $record[0]->kode_kerusakan){
                            $s = "selected";
                          }else{
                            $s = "";
                          }
                         
                          ?>
                      <option <?= $s ?> value="<?=$dat->kode_kerusakan?>"> <?=$dat->kode_kerusakan?> -<?=$dat->kerusakan?> </option>

                          <?php
                        }
                      ?>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Kode Gejala</label>
                    <select name="kode_gejala" required class="form-control select2">

                    <?php
                         foreach($gejala as $ge){

                          if($ge->kode_gejala == $record[0]->kode_gejala){
                            $ss = "selected";
                          }else{
                            $ss = "";
                          }
                          ?>
                      <option  <?= $ss ?> value="<?=$ge->kode_gejala?>"> <?=$ge->kode_gejala?> -<?=$ge->gejala?> </option>

                          <?php
                        }
                      ?>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Deskripsi Penyebab</label>
                  <textarea type="text" name="penyebab"   required class="form-control"><?= $record[0]->penyebab?></textarea>

                      </div>
                    <div class="form-group col-md-6">
                    <input type="submit" name="submit"  value="SIMPAN" class=" btn btn-primary">
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