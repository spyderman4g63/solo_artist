<!-- begin header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>
 				</title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
	<!-- end header.php -->

<body <?php body_class($class); ?>> 

    <div id="container">
    <header id="top">
        <span class="blog-title">
            <?php bloginfo( 'name' ); ?> 
        </span>
        <span class="blog-desc">
            <?php bloginfo( 'description' ); ?> 
        </span>
        
    </header>
    <section id="topbar">
        test
    </section>