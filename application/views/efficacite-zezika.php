<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Katsaka</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url("assets/img/favicon.png") ?>" rel="icon">
    <link href="<?php echo base_url("assets/img/apple-touch-icon.png") ?>" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" integrity="sha512-jG7NmK8Pm8iKEjw8aIWc+GVFBM33O/Ow4U0Xw34D5yyST0fgmlcV6shsghOXexDsAqtE2TCM6WwNy35qX8E6ng==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url("assets/css/style.css") ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<ul>
    <li><a>Enregistrer Recolte</a></li>
    <li><a>Efficacite zezika</a></li>
    <li><a>Efficacite Combinaison zezika</a></li>
    <li><a>Additif</a></li>
    <li><a>Additif</a></li>
</ul>

<h5 class="card-title">Efficacite Zezika</h5>

<!-- Table with stripped rows -->
<table class="table">
    <thead>
    <tr>
        <th scope="col">IdZezika</th>
        <th scope="col">Zezika</th>
        <th scope="col">Total Zezika </th>
        <th scope="col">Total Katsaka produit</th>
        <th scope="col">Efficacite</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($liste_zezika as $zezika) { ?>
            <tr>
                <td><?=$zezika["id_zezika"] ?></td>
                <td><?=$zezika["zezika"] ?></td>
                <td><?=$zezika["total_produit"] ?> Kg</td>
                <td><?=$zezika["total_quantite"] ?> Kg</td>
                <td><?=$zezika["efficacite"] ?>Kg de mais/1kg de zezika </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Katsaka</span></strong>. Tous droits réservés
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/chart.js/chart.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/quill/quill.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url("assets/js/main.js") ?>"></script>

</body>

</html>