<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstarp.css">
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
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-inverse" id="id-2">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">StartBootstrap</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact US</a></li>
					</ul>
				</div>
			</nav>
			<nav class="navbar navbar-inverse" id="id-1">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">StartBootstrap</a>
					</div>
					<div style="float: right;">
						<div id="mySidenav" class="sidenav">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							<a href="index.php">Home</a>
							<a href="about.php">About</a>
							<a href="services.php">Services</a>
							<a href="contact.php">Contact Us</a>
						</div>
						<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
					</div>
				</div>
			</nav>		
		</div>
	</div>