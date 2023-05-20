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
              <div class="col-md-6">

                <form action="<?= base_url('Survey/post_kerusakan') ?>" method="POST">

                  <label class="font-weight-bold text-uppercase">Silahkan Pilih Jenis Kerusakan</label>
                  <div class="form-group">

                    <select id="kerusakan" name="kerusakan" class="form-control fw-12">
                      <option value=""> -- Silahkan Pilih -- </option>
                      <?php
                      foreach ($rusak as $dat) {
                      ?>
                        <option value="<?= $dat->kode_kerusakan ?>"><?= $dat->kerusakan ?></option>
                      <?php
                      }
                      ?>
                    </select>

                  </div>

                  <div class="form-group gejala invisible" id="gejala">
                    <label class="font-weight-bold text-uppercase">PILIH GEJALA</label>

                    <div class="form-check">
                   
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
    $('#kerusakan').change(function() {
      var selectedKerusakan = $(this).val(); // Mengambil nilai yang dipilih pada select id kerusakan

      // Mengirim permintaan AJAX untuk mendapatkan data berdasarkan kerusakan yang dipilih
      $.ajax({
        url: '<?= base_url('Survey/getGejala') ?>', // Ganti dengan URL atau skrip yang sesuai untuk mengambil data
        method: 'POST',
        data: {
          kerusakan: selectedKerusakan
        },
        success: function(response) {
          // Mengisi selectLain dengan opsi yang diambil dari hasil AJAX
          var options = JSON.parse(response); // Menguraikan JSON menjadi objek JavaScript
          var inputElements = '';
          for (var i = 0; i < options.length; i++) {
            var option = options[i];

            inputElements += '<div class="form-check">';
            inputElements += '<input id="chk' + i + '" class="form-check-input" type="checkbox" name="gejala[]" value="' + option.kode_gejala + '">';
            inputElements += '<label for="chk' + i + '">' + option.gejala + '</label>';
            inputElements += '</div>';

          }

          $('#gejala').html(inputElements);
          $('#gejala').removeClass("invisible");
          $('#gejala').append('<br><input class="btn btn-primary" type="submit" value="Selesai"/>');


        },
        error: function() {
          console.log('Terjadi kesalahan dalam permintaan AJAX');
        }
      });
    });
  });
</script>