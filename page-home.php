<?php
add_action('wp_head', function() {
    echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_bloginfo('template_url').'/css/home.css" />';
    echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_bloginfo('template_url').'/css/news.css" />';
});

/*
 * Add link to global feeds instead of current page comments
 */
automatic_feed_links(false);
add_action('wp_head', function() {
   echo '<link rel="alternate" type="application/rss+xml" title="'.get_bloginfo('name').' &raquo; Feed" href="'.home_url('/').'feed/" />'; 
});

require_once("header.php"); ?>

<!-- container -->

<div class="container_12">
<div class="grid_12" style="padding-bottom: 35px;"> 

<h1 style="margin-bottom: 5px;">Ελληνική κοινότητα του GNOME</h1>
<p class="main_header" style="margin-top: 5px; margin-bottom:25px;">Γραφικό περιβάλλον και πλατφόρμα ανάπτυξης λογισμικού GNOME</p>


<!-- home banner -->
<div id="home_banner">
	<a href="http://gnome.gr/screenshots" title="Στιγμιότυπα του GNOME"><img src="http://gnome.gr/wp-content/uploads/2014/10/snapshot2.png" alt="Κυκλοφόρησε το Gnome!!"/></a>
</div>

<div class="welcome_text">
	<p class="main_header" style="margin-bottom: 10px">Ελευθερία για όλους</p>
	<a class="action_button" href="http://gnome.gr/gnome-3/">Εξερευνήστε το GNOME 3</a>
</div>

</div>

<hr class="bottom_shadow" style="margin-bottom: 25px;"/>

<!-- mailing list -->

<div style="margin-left: 10px;">
	<div class="grid_4 alpha">
		<div class="subtle_greybox">
			<p>Για συζήτηση και νέα σχετικά με την ελληνική κοινότητα του GNOME,μπορείτε να κάνετε εγγραφή στη <a href="http://lists.gnome.gr/listinfo.cgi/team-gnome.gr" target="_blank">Λίστα ταχυδρομείου</a></p>
			<p>Η <strong>λίστα ταχυδρομείου</strong> μας είναι το κύριο μέσο,στο οποίο γίνεται η επικοινωνία μεταξύ των μελών της ελληνικής κοινότητας του GNOME.
</p>        
		</div>
	</div>
</div>

<!-- social media -->

<div class="grid_4">
	<div class="subtle_greybox" style="text-align: center;  padding-bottom:5px;">
		<div class="social_network_icons">
		<h5>Κρατήστε επαφή μαζί μας</h5>
		<ul>
			<li>
				<a href="https://www.facebook.com/gnomegr" target="_blank">
				<img src="<?php bloginfo('template_url')?>/images/social/facebook.png" alt="facebook" width="32" height="32"/>Facebook</a>
			</li>
			<li>
				<a href="http://twitter.com/gnomegr/" target="_blank">
				<img src="<?php bloginfo('template_url')?>/images/social/twitter.png" alt="twitter" width="32" height="32"/>Twitter</a>
			</li>
			<li>
				<a href="https://plus.google.com/+GnomeGr" target="_blank" style="text-decoration:none;"><img src="http://gnome.gr/wp-content/themes/gnome-grass/images/social/gplus.png"  alt="googleplus" style="border:0;width:32px; height:32px;"/>Google+</a>
			</li>
			<li>
				<a href="https://github.com/gnomegr" target="_blank">
				<img src="<?php bloginfo('template_url')?>/images/social/github.png" style="width:33px; height:33px;" alt="github_repo"/>GitHub repo</a>
			</li>
		</ul>
	</div>
</div> 

<!-- conferences -->

<div class="grid_4 alpha" style="text-align: center; margin-top:-9px;">
	<div class="subtle_greybox">
		<ul><h5><a href="http://gnome.gr/conferences/">Συνέδρια της κοινότητας</a></h5></ul>
	</div>
</div>
</div> <!-- END first grids -->

<!-- planet -->

<div class="grid_4 omega">
	<div class="subtle_greybox">
		<p>Για περισσότερες ειδήσεις σχετικά με το GNOME, επισκεφθείτε τον <a href="http://planet.gnome.gr/" target="_blank">Πλανήτη GNOME.gr</a></p>
		<p>Ο <strong>Πλανήτης GNOME.gr</strong> είναι ένα παράθυρο στον κόσμο, τη δουλειά και ζωή των ανθρώπων που στηρίζουν το ελεύθερο λογισμικό GNOME στην Ελλάδα και Κύπρο.</p>
	</div>
</div>

<hr class="top_shadow"/>

<!-- news -->

    <h2>Πρόσφατα Νέα</h2>
    <div class="news_list">
<?php

    query_posts (array('post_type' => 'post', 'category_name' => 'νέαειδήσεις', 'posts_per_page' => 3));
        
    while ( have_posts() ) : the_post();
?>

        <div class="grid_4 news">
            <span class="date">
                <?php the_date(); ?>
            </span>
            <a href="<?php the_permalink(); ?>">
                <strong><?php the_title(); ?></strong>
	        <?php echo strip_tags(get_the_excerpt()); ?>
            </a>
        </div>

<?php
   endwhile;
?>

    <p><a href="/news/" class="action_button">Περισσότερα νέα</a></p>
    <div class="clearfix"></div>
    </div>
<!-- news -->
<!-- END container -->
               
        <?php require_once("footer_art.php"); ?>
        </div>
    </div>
</div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
