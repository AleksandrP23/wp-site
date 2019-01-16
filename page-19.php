<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-3"> 
      <?php wp_nav_menu( array(
      'theme_location' => 'social',
      'menu_class'     => 'nav nav-tabs nav-stacked',
      ) ); ?>


      <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
      <?php endif; ?>

    </div>
    <div class="col-md-9">
  
      <?php $query = new WP_Query( array(
        'tax_query' => array(
        'relation' => 'AND',
          array(
          'category' => 'stati',
          ),
          array(
          'category' => 'knigi',
          )
        ) 
      ) ); ?>

      <?php while ( $query->have_posts() ) :  ?>


      <div class="thumbnail"> 

        <?php $query->the_post(); ?> 
        <?php the_post_thumbnail(array('class' => "img-responsive"));?> 

        <div class="caption"> 
          <h3> <?php the_title(); ?> </h3> 
          <p><?php the_content(); ?></p> 
          <hr> 
          <p class="tags"><?php the_tags(' ', ' , '); ?></p> 
        </div> 
      </div>
      
          <?php endwhile; ?>

    </div>
  </div>

  <?php my_widget(); ?> 
</div>


<?php get_footer(); ?>