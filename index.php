<?php
/**
 * The main template for our theme.
 *
 * @since 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- #wrapper -->
    <div id="wrapper">

        <div class="container">

            <!-- #header -->
            <header id="header">
                <?php if ( is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php else : ?>
                    <div class="site-title h1"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                    <div class="site-description h2"><?php bloginfo( 'description' ); ?></div>
                <?php endif ?>
            </header>
            <!-- /#header -->

            <!-- /#main-navigation -->
            <nav id="main-navigation" class="navbar navbar-default" role="navigation">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">

                    <span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse navbar-main-navigation">

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'depth'          => 2,
                                'container'      => false,
                                'menu_class'     => 'nav navbar-nav',
                                'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
                                'walker'         => new Odin_Bootstrap_Nav_Walker()
                            )
                        );
                    ?>

                    <form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
                        <label for="navbar-search" class="sr-only"><?php _e( 'Search:', 'odin' ); ?></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="s" id="navbar-search" />
                        </div>
                        <button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
                    </form>

                </div>

            </nav>
            <!-- /#main-navigation -->

        </div>

    </div>
    <!-- /#wrapper -->

<?php wp_footer(); ?>
</body>
</html>