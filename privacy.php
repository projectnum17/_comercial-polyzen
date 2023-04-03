<?php
/*
Template Name: Privacy
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<section class="privacy">
        <div class="container">
            <div class="privacy__text">
                <h1 class="privacy__title"><?php echo the_title();?></h1>
                <span><?php echo the_content();?></span>

            </div>
        </div>
    </section>
<?php
get_footer();