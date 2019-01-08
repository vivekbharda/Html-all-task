<html lang="en">
<head>
	<title>Rao Infotech Pvt. Ltd / <?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstarp.css">
	<link rel='stylesheet' type='text/css' href='./bower_components/font-raoit/css/fonts.css' />
	<link rel="stylesheet" type="text/css" href="./bower_components/spacing-raoit/css/spacing-raoit.css" />
	<link rel="stylesheet" type="text/css" href="./bower_components/color-raoit/css/colors.css" />

	<script src="./jquery.min.js"></script>
	<script src="./bootstarp.js"></script>
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>
</head>
<body>
	<div class="container-fluid" style="min-height: 100% ">
		<div class="row">
			<nav class="navbar navbar-inverse" id="id-2">
				<div class="navbar-header padding-left-20">
					<a class="navbar-brand" href="index.php">StartBootstrap</a>
				</div>
				<ul class="nav navbar-nav navbar-right padding-right-30" >
					<li <?php if ($nav_id === 'main-nav-home' ) { ?> class="active" <?php } ?> ><a href="index.php">Home</a></li>
					<li <?php if ($nav_id === 'main-nav-about_us' ) { ?> class="active" <?php } ?>><a href="about.php">About Us</a></li>
					<li <?php if ($nav_id === 'main-nav-services' ) { ?> class="active" <?php } ?>><a href="services.php">Services</a></li>
					<li <?php if ($nav_id === 'main-nav-contact_us' ) { ?> class="active" <?php } ?>><a href="contact.php">Contact US</a></li>
				</ul>
			</nav>
			<nav class="navbar navbar-inverse" id="id-1">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">StartBootstrap</a>
				</div>
				<div style="float: right;">
					<div id="mySidenav" class="sidenav">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<a <?php if ($nav_id === 'main-nav-home' ) { ?> class="active" <?php } ?> href="index.php">Home</a>
						<a <?php if ($nav_id === 'main-nav-about_us' ) { ?> class="active" <?php } ?> href="about.php">About</a>
						<a <?php if ($nav_id === 'main-nav-services' ) { ?> class="active" <?php } ?> href="services.php">Services</a>
						<a <?php if ($nav_id === 'main-nav-contact_us' ) { ?> class="active" <?php } ?> href="contact.php">Contact Us</a>
					</div>
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
				</div>
			</nav>		
		</div>