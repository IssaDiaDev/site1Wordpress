<?php /* Template Name: Accueil */ ?>

<?php  get_header();?>


<div class="row block_1">

  <div class="col-md-8 techniques">
    <h1>NOS TECHNIQUES DE PERSONNALISATIONS</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <button type="button" class="btn btn-dark">EN SAVOIR PLUS</button>
  </div>

  <div class="col-md-4 shirts">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tee_shirt.jpg" alt="tee_shirts">
  </div>
</div>

<div class="row block_2 text-center">
  <div class="col-md-12">
    <h2>NOS SOLUTIONS</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Morbi et elit vitae felis</p>
  </div>
</div>

<div class="row block_3">
  <div class="col-md-3 image_1">
    <p>01</p>
    <h3>Textile et objets évenementiels</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <i class="fas fa-arrow-circle-right"></i>
  </div>
  <div class="col-md-3 image_2">
    <p>02</p>
    <h3>Objets médias</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <i class="fas fa-arrow-circle-right"></i>
  </div>
  <div class="col-md-3 image_3">
    <p>03</p>
    <h3>Vêtements de travail</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <i class="fas fa-arrow-circle-right"></i>
  </div>
  <div class="col-md-3 image_4">
    <p>04</p>
    <h3>Tenue d'image</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <i class="fas fa-arrow-circle-right"></i>
  </div>

</div>

<div class="row block_4 text-center">
  <div class="col-md-12">
    <h3>UNE QUESTION ? BESOIN D'UN CONSEIL ?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Morbi et elit vitae felis</p>
  </div>
  <div class="col-md-6">
    <button type="button" class="btn btn-dark">EN SAVOIR PLUS</button>
  </div>
  <div class="col-md-6">
    <button type="button" class="btn btn-dark">EN SAVOIR PLUS</button>
  </div>
</div>

<div class="row block_5">
  <div class="col-md-6">
    <h1>NOS ENGAGEMENTS DURABLES</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <button type="button" class="btn btn-dark">EN SAVOIR PLUS</button>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coton.png" alt="cotton">

  </div>
  <div class="col-md-6">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sac_toile.jpg" alt="sac_toile">
  </div>
  </div>

  <div class="row block_6">
    <div class="col-md-12">
      <h1>ACTUALITES</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
        maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
        felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
      </p>
      <?php
	$args = array( 'numberposts' => '4',
                 'orderby' => 'post_date',
  	             'order' => 'DESC' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){ ?>


		<div class="col-md-3">
    <div class="card" style="width: 18rem;">
  <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>'
  <div class="card-body">
    <h5 class="card-title"><?php echo $recent->post_title; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>;
<?php	}
	wp_reset_query();
?>

</div>

</div>







<?php get_footer(); ?>
