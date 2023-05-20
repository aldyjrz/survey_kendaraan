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
                    <h4> Tambah Kerusakan </h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url("Admin/Kerusakan/tambah") ?>" method="POST">
                    <div class="form-group col-md-6">
                    <label>Kode Kerusakan</label>
 
                    <input type="text" name="kode_kerusakan" required   class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Deskripsi Kerusakan</label>
                    <input type="text" name="kerusakan"  required class="form-control">
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