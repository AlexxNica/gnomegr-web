    <!-- footer grass -->
    <div id="footer_grass">
	&nbsp;
    </div>


    <!-- footer -->
    <div id="footer">
        <div class="container_12">
            <div class="links grid_9" >
                <?php
                wp_nav_menu('menu=footer');
                ?>
            </div>

						<!-- footnotes -->
						<div id="footnotes" class="grid_9">
                <?php _e( 'Πνευματικά δικαιώματα', 'grass' ); ?> © 2007‒<?php echo date('Y');?> <strong class="gnome_logo"><?php _e( 'Ελληνική κοινότητα του GNOME', 'grass' ); ?></strong><br />
								<small>
									<?php _e( 'Άδεια περιεχομένου', 'grass' ); ?>: <a href="http://creativecommons.org/licenses/by-sa/3.0/gr/" target="_blank">Creative Commons: BY-SA</a>.
									<?php _e( 'Βασισμένο στο', 'grass' ); ?> <a href="http://www.wordpress.org" target="_blank">WordPress</a>,
									<?php _e( 'τροποποιμένο θέμα του', 'grass' ); ?> <a href="http://gnome.org/" target="_blank">GNOME</a>.
								</small>
						</div>

            <div class="clear"></div>
        </div>
		</div>

    <?php
    wp_footer();
    ?>

