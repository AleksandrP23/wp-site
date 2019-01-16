<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Portfolio template</title>

<?php wp_head(); ?>
</head>

<body>

<div class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/Portfolio">Бугаец Юлия Владимировна <br> <small>Практикующий психолог</small></a>
    </div>
    <div class="navbar-collapse collapse" id="myDefaultNavbar1">
      <?php
        wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'nav navbar-nav',
         ) );
      ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
          <?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
          <?php endif; ?>
        </li>

        <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Вход</button>

        <div id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title text-center">Вход</h4>
              </div>
              <div class="modal-body" id="theme-my-login1">
              <form name="loginform" id="loginform1" action="/portfolio/?log=admin&amp;pwd=admin&amp;instance=1" method="post">
                <form role="form">
                  <fieldset>
                    <div class="form-group">
                      <input type="text" class="form-control input-lg" name="log" id="user_login1" value="" size="20" placeholder="Логин">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pwd" id="user_pass1" class="form-control input-lg" value="" size="20" autocomplete="off" placeholder="Пароль">
                    </div>
                      <a href="http://localhost/Portfolio/lostpassword/" rel="nofollow" class="btn btn-link pull-right">Забыли пароль?</a><br />
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="submit" name="wp-submit" id="wp-submit1" class="btn btn-lg btn-success btn-block" value="Войти">
                        <input type="hidden" name="redirect_to" value="http://localhost/Portfolio/wp-admin/">
                        <input type="hidden" name="instance" value="1">
                        <input type="hidden" name="action" value="login">
                      </div>
                    </div>
                  </fieldset>
                </form>    
              </div>
            </div>
          </div>
        </div>
      </ul>
    </div> 
  </div>
</div>
