<?php

get_header(); ?>

<div class="container">
  <div class="row"> 

    	<div class="col-md-3">
    	 <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php endif; ?>
    </div>
     <?php
		while ( have_posts() ) : the_post(); ?>

		<div class="col-md-9">
        	<div class="thumbnail">
          		<?php the_post_thumbnail(array('class' => "img-responsive"));?> 
          		<div class="caption">
	            	<h3> <?php the_title(); ?> </h3>
	            	<p><?php the_content(); ?></p>
	            	<hr>
	            	 <p class="tags"><?php the_tags('   ', ' , '); ?></p>
          		</div>
        	</div>
      	</div>
		
		<?php 
			endwhile;
		?>
        
      
  </div>

</div>




<?php get_footer(); ?>
