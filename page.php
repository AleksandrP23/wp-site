<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 pull-left">
    	
        <?php
			while ( have_posts() ) : the_post(); ?>
			
				
				<h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
				
			<?php endwhile;
		?>
          
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
    	  <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php endif; ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>