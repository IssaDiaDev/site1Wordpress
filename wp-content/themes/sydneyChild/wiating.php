

<div class="row block_5">
  <div class="col-md-6 engagement">
    <h1 class="text-center">NOS ENGAGEMENTS DURABLES</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem ,<br> et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <button type="button" class="btn btn-dark">EN SAVOIR PLUS</button>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coton.png" alt="cotton">

  </div>
  <div class="col-md-6 bag">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sac_toile.jpg" alt="sac_toile">
  </div>
</div>

<div class="row block_6 text-center">
  <div class="col-md-12">
    <h1>ACTUALITES</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem ,<br> et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <?php
  $args = array( 'numberposts' => '4',
                 'orderby' => 'post_date',
                 'order' => 'DESC' );
  $recent_posts = wp_get_recent_posts( $args );
  foreach( $recent_posts as $recent ){
    ?>


    <div class="col-md-3">
      <div class="card" style="width: 22rem;">
        <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
        <div class="card-body">
          <h5 class="card-title"><?php echo $recent ["post_title"]; ?>
            <h6> par <?php the_author_meta( 'display_name', $recent['post_author'] ); ?> le
              <?php echo date( 'd.m.y', strtotime( $recent['post_date'] ) );?></h6>
            <p class="card-text"><?php echo wp_trim_excerpt(); ?></p>
            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">lire la suite</a>
        </div>
      </div>
    </div>
    <?php	}
  wp_reset_query();
?>
    <button type="button" class="btn btn-dark">LIRE PLUS D'ARTICLES</button>
  </div>
</div>

<div class="row block_7">

  <div class="col-md-6">
    <h1 class="text-center">QUI SOMMES NOUS?</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et elit vitae felis
      maximus bibendum nec quis metus.<br> Mauris tincidunt ipsum eu risus malesuada, sed varius
      felis efficitur. Proin euismod elit lorem, et efficitur ipsum finibus ut. Vivamus congue
    </p>
    <button type="button" class="btn btn-dark">EN SAVOIR PLUS</button>
    <img class="machine" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/machine.png" alt="machine">
  </div>

  <div class="col-md-6">
    <img class="showroom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/showroom.jpg" alt="showroom">
    <img class="logo-accueil" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/main-logo copie.jpg" width="500px" height="15px" alt="logo_accueil">
  </div>
</div>

<div class="row block_8 text-center">
  <div class="col-md-12">
    <h1 class="text-center">ILS NOUS ONT FAIT CONFIANCE</h1>
    <div class="row">
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carhelper.png">
      </div>
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/glitty.png">
      </div>
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/grandchelem.png">
      </div>
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lecintra.png">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swisscom.png">
      </div>
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wingo.png">
      </div>
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/grandchelem.png">
      </div>
      <div class="col-md-3">
        <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carhelper.png">
      </div>

    </div>
  </div>

</div>

<div class="row block_9 text-center">
  <div class="col-md-12">
    <h1>UNE QUESTION ? BESOIN D'UN CONSEIL ?</h1>
    <button type="button" class="btn-lg btn-dark">CONTACTEZ-NOUS</button>
    <button type="button" class="btn-lg btn-dark">DEMANDER UN DEVIS</button>
  </div>
</div>

<div class="row block_10">
  <div class="col-md-4 rencontrer">
    <h1>NOUS RENCONTRER</h1>
    <div class="adresse">
      <p>Lignes Directes - Le mas des entreprises</p>
      <p>15/17 rue Emile Zola - 69150 Décines</p>
      <p>(69 Lyon) - FRANCE</p>
    </div>
    <div>
      <ul class="contact">
        <li>
          <span><img border="0" fill="white" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/telephone.svg" alt="logo_telephone" width="20px" height="20px">+33(0)4 72 02 52 95</span>
        </li>
        <li>
          <span><img border="0" fill="green" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mail.svg" alt="logo_mail" width="20px" height="20px">contact@lignesdirectes.fr</span>
        </li>
      </ul>
    </div>

  </div>
  <div class="col-md-8 map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52952.24106441865!2d4.852997289591476!3d45.77200479220695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2smy!4v1556286410228!5m2!1sfr!2smy" width="600" height="450"
      frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

</div>
