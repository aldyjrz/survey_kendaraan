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
              <div class="col-md-8">

                <form action="<?= base_url('Survey/post_kerusakan') ?>" method="POST">

                  <label class="font-weight-bold text-uppercase">Silahkan Pilih Jenis Kerusakan</label>
                  <div class="form-group">
                    <table class="table table-striped table-bordered">
                      <tr>
                        <td>Nama</td>
                        <td style="width:10px">:</td>
                        <td>Aldi</td>
                      </tr>
                      <tr>
                        <td>Tanggal Diagnosa</td>
                        <td style="width:10px">:</td>
                        <td>2023-10-05 11;11</td>
                      </tr>
                      <tr>
                        <td>Jenis Kerusakan</td>
                        <td style="width:10px">:</td>
                        <td><?= $hasil[0]->kode_kerusakan ?> - <?= $hasil[0]->kerusakan ?></td>
                      </tr>
                    </table>
                  </div>
              </div>
                  <div class="col-md-12">
                    
                    <p>Berikut hasil diagnosa berdasarkan kerusakan dan gejala yang dipilih :
                    <table id="table-01" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                           <th>Gejala</th>
                          <th>Penyebab</th>
                          <th>Solusi</th>

                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $no = 1;
                        foreach ($hasil as $d) {
                        ?>
                          <tr>
                            <td><?= $no++ ?>
                             <td><?= $d->gejala ?></td>
                            <td><?= $d->penyebab ?></td>
                            <td><?= $d->solusi ?></td>

                          </tr>
                        <?php
                        }

                        ?>

                      </tbody>

                    </table>

                  </div>

                </form>

                <a href="" class="btn btn-primary">Cetak Hasil</a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
</div>
<?php $this->load->view('_partials/footer'); ?>