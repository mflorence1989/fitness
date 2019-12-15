    <footer class="site-footer container">
        <div class="footer-content">
        <?php 
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu'
                );
                wp_nav_menu($args);
                ?>
        </div>

    </footer>


</body>
</html>