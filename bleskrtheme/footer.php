<footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>

    <nav>
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => 'ul'
        )); 
        ?>
    </nav>
</footer>

<?php wp_footer(); ?> 
</body>
</html>