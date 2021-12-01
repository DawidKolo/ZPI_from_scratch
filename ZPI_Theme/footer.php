<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-7 col-4">
                
                <div id="FooterLogo">
                    <div class="DKLogo">
                        <ul>
                    
                            <li><a href="https://www.wsi.edu.pl"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $_SESSION['contrast_dir']; ?>logoWSIZ.png" alt="Przejdź do strony Wyższej Szkoły Informatyki i Zarządzania"/></a></li>
                    
                    
                         </ul>
                
                    </div>
                </div>
                <nav class="footer-menu col-sm-5 col-8 text-right">
                    <?php wp_nav_menu( array('theme_location' => 'footer_menu')); ?>
                </nav>
            </div>    
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>