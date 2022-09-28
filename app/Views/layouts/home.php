<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="x icon" type="img/png" href="storage/images/CvSU-logo.png">
		<link rel="stylesheet" type="text/css" href="storage/css/cvsulib_style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<link rel="stylesheet" href="vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/almasaeed2010/adminlte/dist/js/adminlte.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
		<title><?php echo $this->title ?></title>
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader flex-column justify-content-center align-items-center">
				<img class="animation__shake" src="storage/images/CvSU-logo.png" alt="CvSU Logo" height="60" width="60">
			</div>
			
			<!-- NAVIGATION -->
			<?php $this->app->view->Render('partials/navigation');?>

			<!-- MAIN SIDEBAR -->
			<?php $this->app->view->Render('partials/sidebar');?>

			<!-- MAIN CONTENT -->
			{{content}}
			
			<!-- CONTROL SIDEBAR -->
			<aside class="control-sidebar control-sidebar-dark">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php //echo $googleService->userInfo['gu_picture'];?>" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?php //echo $googleService->userInfo['gu_name'];?></a>
					</div>
				</div>
				<div class="p-3">
					<h5><a href="app/Helpers/Handler.php?module=AuthRevoke" class="d-block">Sign out</a></h5>
					<!-- <p>Sidebar content</p> -->
				</div>
			</aside>

			<!-- FOOTER -->
			<?php $this->app->view->Render('partials/footer');?>
		</div>
	</body>
</html>