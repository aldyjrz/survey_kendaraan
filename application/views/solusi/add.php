<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Master Solusi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Master</a></div>
              <div class="breadcrumb-item">Master Solusi</div>
            </div>
          </div>

          <div class="section-body">
            

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Tambah Solusi </h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url("Admin/Solusi/tambah") ?>" method="POST">
                    <div class="form-group col-md-6">
                    <label>Kode Solusi</label>
                  <input type="text" name="kode_solusi" placeholder="Contoh : S0069" required class="form-control"></input>

                      </div>
                    <div class="form-group col-md-6">
                    <label>Pilih Penyebab</label>
                    <select name="kode_penyebab" required class="form-control">

                    <?php
                         foreach($penyebab as $dat){

                         
                          ?>
                      <option value="<?=$dat->kode_penyebab?>"> <?=$dat->kode_penyebab?> -<?=$dat->penyebab?> </option>

                          <?php
                        }
                      ?>
                      </select>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label>Deskripsi Solusi</label>
                  <textarea type="text" name="solusi"   required class="form-control"></textarea>

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