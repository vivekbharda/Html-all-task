<?php 

include('config.php');

$title = 'Home';
$nav_id = 'main-nav-home';

include('Main_Files/header.php');

// closing With Row and Container is Open

?>

<div class="row padding-top-10">
	<div class="col-md-offset-1 col-md-5">
		<div class="jumbotron">
			<h1 class="jumbotron-heading">900*400</h1>      
		</div>      
	</div>
	<div class="col-md-5">
		<h2 class="business-tagline font-Courier text-ionic-energized">Business Name or Tagline</h2>
		<p>This is a template that is great for samll bussiness. It dosen't have too much fancy flare to it, but it makes a great use of standard Bootstrap core componants. Feel free to use this template for any project you want!</p>
		<button type="button" class="btn btn-primary button-color" data-toggle="collapse" data-target="#demo">Call to Action!</button>
	</div>
</div>
<div class="row padding-10">
	<div class="col-md-12">
		<p class="well text-center  bg-ionic-stable">This is to action card is a great place to showcase some important information or display a clever tagline!</p>		
	</div>
</div>
<div class="row padding-10">
	<div class="col-md-4">
		<ul class="list-group">
			<li class="list-group-item listgroup-heading">Card One</li>
			<li class="list-group-item">Lorem ipsum dolor sit amet, mea facilis moderatius eu, sumo fugit et nec, ex usu veritus evertitur. Laudem libris suscipiantur has cu, eum veniam apeirian mediocritatem et, cum erant saepe fuisset in.</li>
			<li class="list-group-item"><button class="btn btn-primary">More Info</button></li>
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
			<li class="list-group-item listgroup-heading">Card Two</li>
			<li class="list-group-item">Lorem ipsum dolor sit amet, mea facilis moderatius eu, sumo fugit et nec, ex usu veritus evertitur. Laudem libris suscipiantur has cu, eum veniam apeirian mediocritatem et, cum erant saepe fuisset in.</li>
			<li class="list-group-item"><button class="btn btn-primary">More Info</button></li>
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
			<li class="list-group-item listgroup-heading">Card Three</li>
			<li class="list-group-item">Lorem ipsum dolor sit amet, mea facilis moderatius eu, sumo fugit et nec, ex usu veritus evertitur. Laudem libris suscipiantur has cu, eum veniam apeirian mediocritatem et, cum erant saepe fuisset in.</li>
			<li class="list-group-item"><button class="btn btn-primary">More Info</button></li>
		</ul>
	</div>
</div>

<?php 

// Add Footer PHP File

include('Main_Files/footer.php');

?>