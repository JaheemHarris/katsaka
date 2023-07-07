<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SADCF</title>

    <!-- Favicons -->
    <link href="<?php echo base_url("assets/img/favicon.png") ?>" rel="icon">
    <link href="<?php echo base_url("assets/img/apple-touch-icon.png") ?>" rel="apple-touch-icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" integrity="sha512-jG7NmK8Pm8iKEjw8aIWc+GVFBM33O/Ow4U0Xw34D5yyST0fgmlcV6shsghOXexDsAqtE2TCM6WwNy35qX8E6ng==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" integrity="sha256-sWZjHQiY9fvheUAOoxrszw9Wphl3zqfVaz1kZKEvot8=" crossorigin="anonymous">

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

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?php echo base_url("assets/img/logo.png") ?>" alt="">
                <span class="d-none d-lg-block">SADCF</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div> -->
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

               
                <!-- End Search Icon-->

                
                <!-- End Notification Nav -->

                
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->user_login ?></span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $this->session->user_login ?></h6>
                            <!-- <span>Web Designer</span> -->
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Mon compte</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Paramètres</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li> -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url("user/logout") ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Se déconnecter</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="bi bi-grid"></i>
                    <span>Accueil</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Archive</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo base_url('archive/new') ?>">
                            <i class="bi bi-circle"></i><span>Enregistrement</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('archive/search') ?>">
                            <i class="bi bi-circle"></i><span>Recherche</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Components Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

	<div class="pagetitle">
		<h1>Enregistrement</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('archive') ?>">SADCF</a></li>
				<li class="breadcrumb-item">Archive</li>
				<li class="breadcrumb-item active">Enregistrement</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section">
		<div class="row justify-content-center">
			<div class="col-lg-10">

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Enregistrement de dossier</h5>

						<!-- Horizontal Form -->
						<div class="row justify-content-center">
							<?php if($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger">
								<?php echo $this->session->flashdata('error') ?>
								</div>
                            <?php } ?>
						<form class="col-md-8 col-sm-12" method="POST" action="<?php echo base_url('archive/save') ?>">
							<div class="row mb-3">
								<label for="nature_dossier_label" class="col-sm-4 col-form-label">Nature du dossier</label>
								<div class="col-sm-8" id="type_dossier">
									<input type="text" name="nature_dossier" id="nature_dossier" hidden>
									<input type="text" class="typeahead" id="nature_dossier_label" name="nature_dossier_label">
									<button type="button" id="clear_button" class="btn btn-primary">Changer</button>
								</div>
							</div>
							<div class="row mb-3">
								<label for="numero_arrivee" class="col-sm-4 col-form-label">Numéro d'arrivée</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="numero_arrivee" name="numero_arrivee">
								</div>
							</div>
							<div class="row mb-3">
								<label for="date_arrivee" class="col-sm-4 col-form-label">Date d'arrivée courier</label>
								<div class="col-sm-8">
									<input type="date" class="form-control" id="date_arrivee" name="date_arrivee">
								</div>
							</div>
							<div class="row mb-3">
								<label for="agent" class="col-sm-4 col-form-label">Agent</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="agent" name="agent">
								</div>
							</div>
							<div class="row mb-3">
								<label for="observation" class="col-sm-4 col-form-label">Observation</label>
								<div class="col-sm-8">
									<textarea class="form-control" id="observation" name="observation" rows="4"></textarea>
								</div>
							</div>
							<div class="row mb-3">
								<label for="numero_visa" class="col-sm-4 col-form-label">Numéro du visa CF</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="numero_visa" name="numero_visa">
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Enregistrer</button>
								<button type="reset" class="btn btn-secondary">Annuler</button>
							</div>
						</form><!-- End Horizontal Form -->
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</main>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        SUCCESS!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SADCF</span></strong>. Tous droits réservés
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js" integrity="sha256-t0FDfwj/WoMHIBbmFfuOtZv1wtA977QCfsFR3p1K4No=" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url("assets/js/main.js") ?>"></script>
    <script type="text/javascript">
    	var substringMatcher = function(strs) {
		  return function findMatches(q, cb) {
		    var matches, substringRegex;

		    // an array that will be populated with substring matches
		    matches = [];

		    // regex used to determine if a string contains the substring `q`
		    substrRegex = new RegExp(q, 'i');

		    // iterate through the pool of strings and for any string that
		    // contains the substring `q`, add it to the `matches` array
		    $.each(strs, function(i, str) {
		      if (substrRegex.test(str.nomenclature)) {
		        matches.push(str);
		      }
		    });

		    cb(matches);
		  };
		};

		var nature_dossiers = <?php echo json_encode($liste_nature_dossiers); ?>;
		console.log(nature_dossiers);

		$('#type_dossier .typeahead').typeahead({
		  hint: true,
		  highlight: true,
		  minLength: 1
		},
		{
		  name: 'nature_dossiers',
		  display: 'nomenclature',
		  source: substringMatcher(nature_dossiers),
		  templates: {
	            suggestion: function(data) {
	                return '<div>' + data.nomenclature + '</div>';
	            }
	       }
		}).on('typeahead:selected', function(event, data) {
	        $('#nature_dossier').val(data.id);
	        $('#nature_dossier_label').prop('disabled',true);
	    });

	    $('#clear_button').click(function(){
	    	$('#nature_dossier_label').prop('disabled',false);
	    	$('#nature_dossier_label').val('');
	    	$('#nature_dossier').val('');
	    });
    </script>

    <?php if(isset($_GET['success'])) { var_dump($_GET['success']); ?>
        <script>
            Swal.fire({
                title: 'Enregistrement réussi!',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        </script>
    <?php } ?>
    <?php if(isset($_GET['error'])) { var_dump($_GET['success']); ?>
        <script>
            Swal.fire({
                title: 'Echec de l\'enregistrement!',
                icon: 'error',
                confirmButtonText: 'OK'
            })
        </script>
    <?php } ?>

</body>

</html>