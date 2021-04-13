<?php

/**
 * Template Name: Home template
 * The template for displaying HOME PAGE
 *
 * This is the template that displays HOME PAGE by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Muda_Texto
 */

get_header();
?>

<main id="primary" class="site-main mt-5">
    <div class="row">
        <div class="col-md-12 intro">
            <h1>Mude seu texto facilmente!</h1>
            <p>Esqueceu o CAPS ligado, precisa converter texto para maiúsculas, minúsculas, inverter o texto?</p>
            <p>Você veio ao lugar certo! Utilize o formulário abaixo, digite ou cole seu texto, utilize os botões abaixo do formulário para converter, e depois pode utilizar o botão de "Copiar" para utilizar seu texto onde quiser.</p>
        </div>
        <div class="col-md-12 convertArea">
            <div class="alert alert-success alert-autocloseable-success" style="display:none">
                Copiado com sucesso.
            </div>
            <form class="formConverter" name="convertForm">
                <div class="form-group">
                    <label for="theString">Cole seu texto no campo abaixo:</label>
                    <textarea class="form-control" id="theString" rows="10" placeholder="Digite/cole seu texto aqui..."></textarea>
                </div>
            </form>
            <button onclick="convertToSentenceCase();return false;" class="btn btn-primary">Sentença</button>
            <button onclick="convertToUpper();return false;" class="btn btn-primary">MAIÚSCULAS</button>
            <button onclick="convertToLower();return false;" class="btn btn-primary">minúsculas</button>
            <button onclick="convertToCapitalized();return false;" class="btn btn-primary">Capitalizado</button>
            <button onclick="convertToAlternateCase();return false;" class="btn btn-primary">AlTeRnAdO</button>
            <button onclick="convertToInverseCase();return false;" class="btn btn-primary">iNvErTiDo</button>
            <button class="btn btn-primary btn-clipboard" data-clipboard-target="#theString">
                <i class="fa fa-copy"></i>
                Copiar
            </button>
        </div>
    </div> <!-- row -->
    <div class="row content-home">
        <div class="col-md-12">
            <?php the_content(); ?>
        </div> <!-- col-md-12 -->
    </div>

</main><!-- #main -->

<?php
get_footer();
