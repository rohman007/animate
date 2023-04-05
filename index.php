<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Animate</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;900&display=swap" rel="stylesheet">		
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
	<?php
		$hero_text_1 = "Develop.";
		$hero_text_2 = "Preview.";
		$hero_text_3 = "Ship.";
		
	?>
		<section id="hero-section">
			<div class="container-fluid mt-3 text-center">
				<h1 class="hero_title">
					<span class="animated-gradient-text animated-text-background-1" style="--content:'<?= $hero_text_1 ?>';--padding:0.05em;--start-color:#007CF0;--end-color:#00DFD8">
						<span class="animated-text-foreground animated-text-foreground-1"><?= $hero_text_1 ?></span>
					</span>
					<span class="animated-gradient-text animated-text-background-2" content="Preview." style="--content:'<?= $hero_text_2 ?>';--padding:0.05em;--start-color:#7928CA;--end-color:#FF0080">
						<span class="animated-text-foreground animated-text-foreground-2"><?= $hero_text_2 ?></span>
					</span>
					<span class="animated-gradient-text animated-text-background-3" style="--content:'<?= $hero_text_3 ?>';--padding:0.05em;--start-color:#FF4D4D;--end-color:#F9CB28">
						<span class="animated-text-foreground animated-text-foreground-3"><?= $hero_text_3 ?></span>
					</span>
				</h1>
				<div class="row align-items-center justify-content-center mb-3">
					<div class="col-sm-8">
						<h4>Vercel is the platform for frontend developers, providing the speed and reliability innovators need to create at the moment of inspiration.</p>
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-stretch">
					<div class="hero-button-wrapper">
						<span class="hero_button-bg hero_bg-1"></span>
						<span class="hero_button-bg hero_bg-2"></span>
						<span class="hero_button-bg hero_bg-3"></span>
						<a class="btn hero_gradient-button px-5 py-2"><span class="">Get a Demo</span></a>
					</div>
				</div>
			</div>
		<section>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>
</html>
