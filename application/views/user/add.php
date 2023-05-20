<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Master User</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Master</a></div>
              <div class="breadcrumb-item">Master User</div>
            </div>
          </div>

          <div class="section-body">
            

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><a href="<?= base_url("admin/User/tambah")?>" class="btn btn-primary">Tambah User</a></h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url("admin/User/tambah") ?>" method="POST">
                  <div class="form-group col-md-6">
                      <label>Username</label>
                      <input type="text" name="username" required  class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input type="text" name="password"  required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="text" name="email"  required class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama"  required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Level</label>
                      <select class="form-control" required  name="level">
                        <option value="">PILIH LEVEL</option>
                        <option value="admin">Admin</option>
                        <option value="driver">Driver</option>
                      </select>
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