<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="x icon" href="storage/images/CvSU-logo-16x16.webp">
		<link rel="stylesheet" type="text/css" href="storage/css/ils-styles.css">
		<link rel="stylesheet" type="text/css" href="storage/css/ils-utils.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
		<script src="https://kit.fontawesome.com/56b3c80041.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="storage/js/main.js"></script>
        <script src="storage/js/tracker.js"></script>
        <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
		<title><?php echo $this->title ?></title>
	</head>
	<body class="ils-bg-default">
		<?php
			$this->app->view->Render('partials/ils-header');
		?>
		<!-- Content -->
    	{{content}}
		<?php
			$this->app->view->Render('partials/ils-footer');
		?>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php
	if($this->app->session->GetSwal()) {
		echo "<script>Swal.fire({
			icon: '" . $this->app->session->GetSwal()['icon'] . "',
			title: '" . $this->app->session->GetSwal()['title'] . "',
			text: '" . $this->app->session->GetSwal()['text'] . "'
		})</script>";
	}
?>