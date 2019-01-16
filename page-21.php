<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-5"> 

    </div>
    <div class="col-md-7">

    </div>
  </div>
</div>

<?phpfunction portfolio_scripts() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  //wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
}?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>