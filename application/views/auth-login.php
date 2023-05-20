<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/STISLA-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">

                <h3>Survey Kendaraan</h3>
              </div>
              <?php if (!empty($this->session->flashdata("message")) != "") { ?>
                <div class="alert alert-warning ml-3 mr-3 alertku" data-delay='{"show":"1000", "hide":"1000"}'>
                  <?= $this->session->flashdata("message"); ?>
                </div>

              <?php } ?>
              <div class="card-body">
                <form method="POST" action="<?= base_url("Auth/login") ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>

                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="<?php echo base_url(); ?>auth_forgot_password" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>



                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $this->load->view('_partials/js'); ?>

  <script>
    $(".alertku").fadeTo(2000, 400).slideUp(500, function() {
      $(".alertku").alert('close');
    });
  </script>