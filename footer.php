<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Muda_Texto
 */

?>
<div class="footer fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Construído por
                    <a href="https://twitter.com/vidaldeveloper" target="_blank">@VidalDeveloper</a>
                    <br>
                    <a class="text-center" href="<?php echo site_url('/politica-de-privacidade'); ?>" target="">Política de Privacidade/Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</div>

</div><!-- #page -->
<script type="text/javascript">
    function init() {
        var clipboard = new ClipboardJS('.btn-clipboard');

        clipboard.on('success', function(e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);

            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
        });
    }
    jQuery(document).ready(function($) {
        $('.alert-autocloseable-success').hide();

        $('.btn-clipboard').click(function() {
            $('#autoclosable-btn-success').prop("disabled", true);
            $('.btn-clipboard').prop("disabled", true);
            $('.alert-autocloseable-success').show();

            $('.alert-autocloseable-success').delay(3000).fadeOut("slow", function() {
                // Animation complete.
                $('#autoclosable-btn-success').prop("disabled", false);
                $('.btn-clipboard').prop("disabled", false);
            });

        });
    });
</script>

<?php wp_footer(); ?>

</body>

</html>
