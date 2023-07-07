<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SADCF</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon.png')?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!--  <link href="https://fonts.gstatic.com" rel="preconnect">-->
    <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <!-- <div class="d-flex justify-content-center py-4">
                                <img src="<?php echo base_url('assets/img/logo.png')?>" alt="">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    
                                    <span class="d-none d-lg-block">SADCF</span>
                                </a>
                            </div> -->
                            <div style="margin-bottom: 30px;">
                                <img src="<?php echo base_url('assets/img/logo.png')?>" style="margin-bottom: 20px;" alt="">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">    
                                    <span class="d-none d-lg-block">SADCF</span>
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Connectez-vous</h5>
                                        <p class="text-center small">Entrez vos identifiants de connexion</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST" action="<?php echo base_url('user/auth') ?>">
                                        <?php if($this->session->flashdata('error')) { ?>
                                            <div class="alert alert-danger">
                                                <?php echo $this->session->flashdata('error') ?>
                                            </div>
                                        <?php } ?>
                                        <div class="col-12">
                                            <label for="login" class="form-label">Login</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="login" class="form-control" id="login" required>
                                                <div class="invalid-feedback">Veuillez entrer votre login!</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Mot de passe</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            <div class="invalid-feedback">Veuillez entrer votre mot de passe!</div>
                                        </div>
                                        <div class="col-12">
                                            <input type="checkbox" name="show-password" id="show-password"> Afficher le mot de passe
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

    <script>
        $('#show-password').on('change', function (event) {
            event.target.checked ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
        });
    </script>

</body>

</html>
