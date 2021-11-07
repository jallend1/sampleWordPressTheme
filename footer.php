    <footer>
        <div class="footer-menu">
            <div>
                <h1 class="logo-text">
                    <a href="<?php site_url(); ?>"><?php bloginfo('name'); ?></a>
                </h1>
            </div>
            <div>
                <h3>Engage</h3>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footerOne'
                    )); ?>
                </nav>
            </div>
            <div>
                <h3>Get Active</h3>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footerTwo'
                    )); ?>
                </nav>
            </div>
            <div>
                <h3>Connect With Us</h3>
                <nav class="social">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <p> &copy; 2021 Jason Allen</p>
    </footer>
    <?php wp_footer() ?>
</body>
</html>