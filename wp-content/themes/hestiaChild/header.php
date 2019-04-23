<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<title>Lignes Directes</title>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<a class="navbar-brand" href="http://localhost/wordpress/site1/">
				<img border="0" src="<?php echo get_stylesheet_directory_uri(); ?>
				/assets/images/logo_lignes_directes2.png" alt="logo_lignes_directes" width="150px" height="80px">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse mx-auto" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Lignes Directes<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Nos Solutions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Actualites</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">References</a>
					</li>
				</ul>
			</div>

			<div class="collapse navbar-collapse contact mr-auto">
				<ul class="navbar-nav">
					<li>
						<span><img border="0" src="<?php echo get_stylesheet_directory_uri(); ?>
						/assets/images/telephone.svg" alt="logo_telephone" width="20px" height="20px">+33(0)4 72 02 52 95</span>
					</li>
					<li>
						<span><img border="0" src="<?php echo get_stylesheet_directory_uri(); ?>
						/assets/images/mail.svg" alt="logo_telephone" width="20px" height="20px">contact@lignesdirectes.fr</span>
					</li>
				</ul>
			</div>
		</nav>

		<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="la.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
