<?php

get_header(); ?>

<div class="container">
  <div class="row">
  	<div class="col-lg-4 col-md-4">
    		<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	
			<?php dynamic_sidebar( 'sidebar-1' ); ?>

			<?php endif; ?>
	</div>
    <div class="col-lg-8 col-md-8">
     	
       		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php the_content(); ?> 
			<?php 
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			endwhile; ?>
          
    </div>
  </div>
</div>

<?php get_footer(); ?>
