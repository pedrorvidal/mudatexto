<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Muda_Texto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&family=Roboto&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="init();">
<?php wp_body_open(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/editar-texto.svg" alt="">
        <h1 class="title-home">Muda Texto</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link <?=is_page('home') ? 'active' : ''?>" aria-current="page" href="<?=site_url(); ?>">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=is_page('contato') ? 'active' : ''?>" href="<?php echo site_url('/contato'); ?>">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="page" class="container">
