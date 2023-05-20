<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
            Edit user login
          </div>
            <div class="card-body">

            <?php 
                 $message = $this->session->flashdata('message');
                 if($message != null)
                 {  ?>
            <div class="alert alert-success  bg-dark p-2 ml-3 mr-3 w-50">
                      <?php
                 
                         echo $message;
                       } ?>
                    </div>
              <form action="<?= base_url("admin/User/edit") ?>" method="POST">
                <div class="form-group col-md-6">
                  <label>Username</label>
                  <input type="text" name="username" required value="<?= $record[0]->username ?>" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?= $record[0]->nama ?>" required class="form-control">
                </div>

                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="text" name="email" value="<?= $record[0]->email ?>" required class="form-control">
                </div>
                <input type="hidden" name="id_user" value="<?= $record[0]->id_user ?>" required class="form-control">


                <div class="form-group col-md-6">
                  <label>Level</label>
                  <select class="form-control" required name="level">

                    <?php $lev = $record[0]->level;

                    ?>
                    <option value="">PILIH LEVEL</option>
                    <option <?php if ($lev == "admin") {
                              echo "selected";
                            } ?> value="admin">Admin</option>
                    <option <?php if ($lev == "driver") {
                              echo "selected";
                            } ?> value="driver">Driver</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <input type="submit" name="submit" value="SIMPAN" class=" btn btn-primary">
              </form>
            </div>
            </div>
 
            <div class="row">
              <div class="col-lg-12">
                <div class="card-header">
                  Edit Password
                </div>
                <div class="card mt-2">
                  <form action="<?= base_url("admin/User/edit_pass") ?>" method="POST">

                    <input type="hidden" name="id_user" value="<?= $record[0]->id_user ?>" required class="form-control">

                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input type="password" name="old_password" required class="form-control">
                    </div>

                    <?php 
                 $message = $this->session->flashdata('message_pass');
                 if($message != null)
                 {  ?>
            <div class="alert alert-success p-2 ml-3 mr-3 w-50">
                      <?php
                 
                         $message;
                      } ?>
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input type="password" name="new_password" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="submit" name="submit" value="UBAH PASSWORD" class=" btn btn-primary">
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