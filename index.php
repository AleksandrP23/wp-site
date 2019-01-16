<?php get_header(); ?>

<section>
  <div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs12">
          <?php do_action('welcome_text'); ?>
          <h3>"Когда человек не знает, к какой пристани он держит путь,<br>для него ни один ветер не будет попутным"</h3>
          <p class="text-center">Луций Анней Сенека</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <p>К Вашим услугам мои навыки различных школ и направлений психотерапии: арт-терапия, психодрама, эриксоновский гипноз, песочная терапия, феноменологический  подход и др. Буду рада познакомиться с Вами и пройти вместе путь самопознания и поиска нужных решений! 
        <br>В жизни каждого человека бывают трудности, с которыми сложно справиться, оставшись с ними наедине. Цель психологической консультации и психотерапии — помочь человеку увидеть возможные решения, понять себя, найти причины и ответы на вопросы «Как быть?» и «Что с этим делать?».</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
      <h4>Запись на консультацию</h4>
      <small>Телефон: 8 (123) 456-7890 </small>
      </div>
    </div>
  </div>
</section>

<hr>

<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Последние статьи</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php 
        $wp_query->set('posts_per_page', 3);
        $wp_query->query($wp_query->query_vars);

      $query = new WP_Query( array(
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

      <?php while ( have_posts() ) : the_post();  ?>

      <div class="col-sm-4">
        <div class="thumbnail">
          <?php the_post_thumbnail(array('class' => "img-responsive"));?> 
          <div class="caption">
            <?php $query->the_post(); ?>
            <h4> <?php the_title(); ?> </h4>
            <p><?php the_content(); ?></p>
            <hr>
          </div>
        </div>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
