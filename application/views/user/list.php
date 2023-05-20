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
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                            <?php
                            $no = 1;
                               foreach($record as $dat){
                                
                            ?>
                                                      <tr>

                                                        <td><?= $no++?></td>

                            <td><?= $dat->nama?></td>
                            <td><?= $dat->username ?></td>
                            <td><?= $dat->level ?></td>
                            <td><a href="<?= base_url("admin/User/edit/".$dat->id_user)?>" class="btn btn-warning">Edit</a> <a href="<?= base_url("admin/User/delete/".$dat->id_user)?>" class="btn btn-danger">Delete</a></td>

                          </tr>
                          <?php } ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
        </section>
      </div>
<?php $this->load->view('_partials/footer'); ?>