
<?php
// footer.php
?>

<footer>
    <div class="container">
        <?php wp_nav_menu( 'footer' ); ?>
        <p class="copyright">&copy;
            <?php bloginfo('name'); ?> <?php echo date('Y');?><br>
            <?php if (function_exists('pll__')) {echo pll__('All rights reserved');} ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>