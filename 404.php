<?php
/**
 * @package GNOME Website
 * @subpackage Grass Theme
 */

require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
            
            <div class="content without_sidebar">
                
                <div class="grid_10 prefix_1 suffix_1 alpha omega">
                        <h2><?php _e( 'Ουπς. Αυτό που ψάχνετε δεν είναι εδώ!', 'grass' ); ?></h2>
                        
                        <p class="main_header"><?php _e( 'Η σελίδα που προσπαθείτε να  αποκτήσετε πρόσβαση δεν βρέθηκε.', 'grass' ); ?></p>
                        
                        <hr />
                        
                        <div class="grid_5 alpha">
                            <p><?php
                            
                            printf(
                                __( 'Επιστρέψτε στην <a href="%1$s">αρχική σελίδα</a> για να ξεκινήσετε από την αρχή ή να δοκιμάσετε ξανά με τη παρακάτω φόρμα αναζήτησης.', 'grass'),
                                get_bloginfo('url')
                            );
                            
                            ?></p>
                            <?php get_search_form(); ?>
                        </div>
                        
                     <div class="grid_5 omega">
                            <p><?php
                            
                            printf(
                                __('Αν νομίζεται πως υπάρχει κάποιο σφάλμα σε σύνδεσμο του ιστότοπου, παρακαλούμε να μας ενημερώσετε στη <a href="%1$s">λίστα αλληλογραφίας</a>.', 'grass'),
                                'http://lists.gnome.gr/listinfo.cgi/team-gnome.gr'
                            );
                            
                            ?></p>
                        </div>
                </div>
                
                <div class="clear"></div>
            </div>
            <?php $footer_art = '404'; ?>
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
