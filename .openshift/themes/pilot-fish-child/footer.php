<?php
/**
 * Footer Template
 *
 * @file           footer.php
 * @package        Pilot Fish
 * @filesource     wp-content/themes/pilot-fish/footer.php
 * @since          Pilot Fish 0.1
 */
?>

</div><!-- end of #wrapper -->
<?php pilotfish_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php pilotfish_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
<?php pilotfish_in_footer(); ?>
    <?php get_sidebar('footer'); ?>          
    <div id="copyright" class="clear">    
        <div class="row span12 copyright">
            <small><?php esc_attr_e('&copy;', 'pilotfish'); ?> <?php _e(date('Y')); ?> Matt Fryer </small>
        </div><!-- end of .copyright -->
        
        <div class="row span12 last scroll-top"><small><a href="#" title="<?php esc_attr_e( 'scroll to top', 'pilotfish' ); ?>"><?php _e( 'Back to Top', 'pilotfish' ); ?></a></small></div><!-- end of .scroll-top -->      
    </div><!-- end of #copyright -->

</div><!-- end of #footer -->

<?php pilotfish_footer_end(); // after footer hook ?>
<?php pilotfish_footer() ?>
<?php wp_footer(); ?>
<?php pilotfish_masonry(); ?>
</body>
</html>
