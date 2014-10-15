<?php
/**
 * @package GNOME Website
 * @subpackage Grass Theme
 */

require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
        
            <div class="page_title">
                <h1>Νέα</h1>
            </div>
  
            <div class="content">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="news_title">
                    <p class="date"><?php the_date(); ?></p>
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php the_content(); ?>
            <?php endwhile; // End the loop. Whew. ?>
                <br />

                <div class="clear"></div>
            </div>


								<div class="sidebar">
									<?php require_once("news_sidebar.php");?>
								</div></div>


            <?php require_once("footer_art.php"); ?>
        </div>

    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
