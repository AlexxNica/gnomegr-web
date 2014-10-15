<?php

require_once("header.php"); ?>

<!-- introduction home -->
<div class="container_12">
<div class="grid_12" style="padding-bottom: 35px;"> 

<h1 style="margin-bottom: 5px;">Ελληνική κοινότητα του GNOME</h1>
<p class="main_header" style="margin-top: 5px; margin-bottom:25px;">Γραφικό περιβάλλον και πλατφόρμα ανάπτυξης λογισμικού GNOME</p>


<!-- home banner -->
<div id="home_banner">
<a href="http://gnome.gr/screenshots/" title="Στιγμιότυπα του GNOME"><img src="/wp-content/uploads/2014/10/snapshot2.png" alt="Κυκλοφόρησε το GNOME!!"/></a>
</div>

<div class="welcome_text">
<p class="main_header" style="margin-bottom: 10px">Ελευθερία για όλους</p>
<a class="action_button" href="http://gnome.gr/gnome-3/">Εξερευνήστε το GNOME 3</a>
</div>

</div>
</div>

<hr class="bottom_shadow">


<div class="container_12">
<div style="margin-left: 10px;">

	<div class="grid_4 alpha">
		<div class="subtle_greybox">
<p>Για συζήτηση και νέα σχετικά με την ελληνική κοινότητα του GNOME,μπορείτε να κάνετε εγγραφή στη <a href="http://lists.gnome.gr/listinfo.cgi/team-gnome.gr" target="_blank">Λίστα αλληλογραφίας</a></p>
<p>Η <strong>λίστα αλληλογραφίας</strong> μας είναι το κύριο μέσο,στο οποίο γίνεται η επικοινωνία μεταξύ των μελών της ελληνικής κοινότητας του GNOME.
</p>        
		 </div>  
         </div>  


<div class="grid_4">
<div class="subtle_greybox" style="text-align: center;  padding-bottom:5px;">
<a name="social_media"></a>
<div class="social_network_icons">

<h5>Κρατήστε επαφή μαζί μας</h5>

<ul>
	<li>
		<a href="https://www.facebook.com/gnomegr" target="_blank">
		<img src="http://gnome.gr/wp-content/themes/gnome-grass/images/social/facebook.png" alt="facebook" width="32" height="32"/>Facebook</a>
	</li>
	<li>
		<a href="http://twitter.com/gnomegr/" target="_blank">
		<img src="http://gnome.gr/wp-content/themes/gnome-grass/images/social/twitter.png" alt="twitter" width="32" height="32"/>Twitter</a>
	</li>
	<li>
		<a href="https://plus.google.com/+GnomeGr" target="_blank" style="text-decoration:none;"><img src="http://gnome.gr/wp-content/themes/gnome-grass/images/social/gplus.png"  alt="googleplus" style="border:0;width:32px; height:32px;"/>Google+</a>
	</li>
	<li>
		<a href="https://github.com/gnomegr" target="_blank">
		<img src="http://gnome.gr/wp-content/themes/gnome-grass/images/social/github.png" style="width:33px; height:33px;" alt="github_repo"/>GitHub repo</a>
	</li>
</ul>

</div>
</div>

<div class="grid_4 alpha" style="text-align: center; margin-top:-9px;">
<div class="subtle_greybox">
<ul><h5><a href="http://gnome.gr/conferences/">Συνέδρια της κοινότητας</a></h5></ul>
</div>
</div>

</div>

            <div class="grid_4 omega">
                <div class="subtle_greybox">
                    <p>Για περισσότερες ειδήσεις σχετικά με το GNOME, επισκεφθείτε τον <a href="http://planet.gnome.gr/" target="_blank">Πλανήτη GNOME.gr</a></p>
                    <p>Ο <strong>Πλανήτης GNOME.gr</strong> είναι ένα παράθυρο στον κόσμο, τη δουλειά και ζωή των ανθρώπων που στηρίζουν το ελεύθερο λογισμικό GNOME στην Ελλάδα και Κύπρο.</p>
                </div>
            </div>
</div>
</div>

<hr class="top_shadow">

<div id="container">
	<div class="two_columns">
		<div class="content.without_sidebar">
			<div class="news_list grid_12">

<span style="margin-left: 8px;font-size: 18pt; font-family: 'Cantarell' 'Droid Serif', 'DejaVu Serif', Cambria, Georgia, serif; line-height: 130%; color: #3465a4; ">
Πρόσφατα Νέα
</span>

                <?php
                $i = 0;
                while ( have_posts() ) : the_post();
                ?>
                    <div class="news">
                        <?php if ($i == 0): ?>

                        <?php endif; ?>
			<span style="text-align: left; margin-left: 10px;" class="date">
				<?php the_date(); ?>
			</span>

                        
                     <div class="grid_6">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong><br />
                                <?php echo strip_tags(get_the_excerpt()); ?>
                            </a>
                      </div>

                        <div class="clear"></div>
                </div>
                <?php
                $i++;
                endwhile;
                ?>
      	 		 </div>
		</div>
	</div>


<div class="page_navigation">
	<span class="next"><?php next_posts_link(__('Παλαιότερες καταχωρήσεις', 'grass')); ?></span>
	<span class="prev"><?php previous_posts_link(__('Νεότερες καταχωρήσεις', 'grass')); ?></span>
</div>

</div>

	<div class="clear"></div>

        <?php require_once("footer_art.php"); ?>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>