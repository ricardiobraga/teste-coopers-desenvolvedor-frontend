<!DOCTYPE html>


<?php
// VERIFICA O TITULO DA PAGINA PARA POR NA TAG TITLE
if (get_the_title() == '') {
   $title = 'Erro '; // SE VIER VAZIO, COLOCA Erro
} else {
   $title = get_the_title();  // SENÃO COLOCA O NOME QUE VEM
}
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet"  type="text/css" href="<?php echo get_theme_root_uri() ?>/ricardo-landing-page/style.css"> -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ricardo-landing-page' ); ?></a>


