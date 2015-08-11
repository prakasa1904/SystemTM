<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content='<?php echo $description ?>'>
	<meta name="author" content='<?php echo $author ?>'>
	<meta name="viewport" content="min-width=800px, initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">-->

	<?php if(!$this->session->userdata('StafflogStats')): ?>
		<!-- Login and Signup Themes -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css">
	<?php else: ?>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/administrator-style.css">
		<!-- Custom Fonts -->
    	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<!-- JQuery JavaScript -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<?php endif; ?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png">
	<style type="text/css">
		.navbar-top-links {
		    margin-right: 0;
		}

		.navbar-top-links li {
		    display: inline-block;
		}

		.navbar-top-links li:last-child {
		    margin-right: 15px;
		}

		.navbar-top-links li a {
		    padding: 15px;
		    min-height: 50px;
		}

		.navbar-top-links .dropdown-menu li {
		    display: block;
		}

		.navbar-top-links .dropdown-menu li:last-child {
		    margin-right: 0;
		}

		.navbar-top-links .dropdown-menu li a {
		    padding: 3px 20px;
		    min-height: 0;
		}

		.navbar-top-links .dropdown-menu li a div {
		    white-space: normal;
		}

		.navbar-top-links .dropdown-messages,
		.navbar-top-links .dropdown-tasks,
		.navbar-top-links .dropdown-alerts {
		    width: 310px;
		    min-width: 0;
		}

		.navbar-top-links .dropdown-messages {
		    margin-left: 5px;
		}

		.navbar-top-links .dropdown-tasks {
		    margin-left: -59px;
		}

		.navbar-top-links .dropdown-alerts {
		    margin-left: -123px;
		}

		.navbar-top-links .dropdown-user {
		    right: 0;
		    left: auto;
		}
	</style>
</head>
<body>
