<?php
add_action('wp_head', function() {
    echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_bloginfo('template_url').'/pack/timeline/css/default.css" />';
    echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_bloginfo('template_url').'/pack/timeline/css/component.css" />';
});

require_once("header.php"); ?>

<!-- container -->
<div class="container_12">

<ul class="cbp_tmtimeline">
					<li>
						<time class="cbp_tmtime" datetime="2014-04-10 18:30"><span>September</span> <span>15-23</span></time>
<div class="cbp_tmicon ">3.13</div>

						<div class="cbp_tmlabel">
							<h2>UI Freeze</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum magna et pellentesque posuere. Aenean euismod ut quam quis pulvinar.</p>
						</div>
<div class="cbp_tmlabel">

							<h2>String Freeze</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum magna et pellentesque posuere. Aenean euismod ut quam quis pulvinar.</p>
						</div>
					</li>

					<li>
						<time class="cbp_tmtime" datetime="2014-04-10 18:30"><span>4/11/13</span> <span>12:04</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2>String Freeze</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum magna et pellentesque posuere. Aenean euismod ut quam quis pulvinar. Sed hendrerit felis eget leo malesuada lobortis. Integer mauris purus, consequat ac mattis vitae, fermentum in tortor. Sed eu turpis dignissim, tempor eros non, viverra elit. Pellentesque id ligula euismod, convallis nibh consequat, bibendum nisi. Aliquam pulvinar egestas tortor, id blandit leo lobortis eu. Donec vel varius lacus, sed congue leo. Curabitur nulla augue, vestibulum in ligula nec, pretium commodo velit. Praesent aliquam massa sed quam accumsan, a fringilla eros accumsan. </p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>05:36</span></time>
						<div class="cbp_tmicon cbp_tmicon-mail"></div>
						<div class="cbp_tmlabel">
							<h2>Sprout garlic kohlrabi</h2>
							<p>Parsnip lotus root celery yarrow seakale tomato collard greens tigernut epazote ricebean melon tomatillo soybean chicory broccoli beet greens peanut salad. Lotus root burdock bell pepper chickweed shallot groundnut pea sprouts welsh onion wattle seed pea salsify turnip scallion peanut arugula bamboo shoot onion swiss chard. Avocado tomato peanut soko amaranth grape fennel chickweed mung bean soybean endive squash beet greens carrot chicory green bean. Tigernut dandelion sea lettuce garlic daikon courgette celery maize parsley komatsuna black-eyed pea bell pepper aubergine cauliflower zucchini. Quandong pea chickweed tomatillo quandong cauliflower spinach water spinach.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-15 13:15"><span>4/15/13</span> <span>13:15</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Watercress ricebean</h2>
							<p>Peanut gourd nori welsh onion rock melon mustard jícama. Desert raisin amaranth kombu aubergine kale seakale brussels sprout pea. Black-eyed pea celtuce bamboo shoot salad kohlrabi leek squash prairie turnip catsear rock melon chard taro broccoli turnip greens. Fennel quandong potato watercress ricebean swiss chard garbanzo. Endive daikon brussels sprout lotus root silver beet epazote melon shallot.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-16 21:30"><span>4/16/13</span> <span>21:30</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<h2>Courgette daikon</h2>
							<p>Parsley amaranth tigernut silver beet maize fennel spinach. Ricebean black-eyed pea maize scallion green bean spinach cabbage jícama bell pepper carrot onion corn plantain garbanzo. Sierra leone bologi komatsuna celery peanut swiss chard silver beet squash dandelion maize chicory burdock tatsoi dulse radish wakame beetroot.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-17 12:11"><span>4/17/13</span> <span>12:11</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2>Greens radish arugula</h2>
							<p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-18 09:56"><span>4/18/13</span> <span>09:56</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Sprout garlic kohlrabi</h2>
							<p>Parsnip lotus root celery yarrow seakale tomato collard greens tigernut epazote ricebean melon tomatillo soybean chicory broccoli beet greens peanut salad. Lotus root burdock bell pepper chickweed shallot groundnut pea sprouts welsh onion wattle seed pea salsify turnip scallion peanut arugula bamboo shoot onion swiss chard. Avocado tomato peanut soko amaranth grape fennel chickweed mung bean soybean endive squash beet greens carrot chicory green bean. Tigernut dandelion sea lettuce garlic daikon courgette celery maize parsley komatsuna black-eyed pea bell pepper aubergine cauliflower zucchini. Quandong pea chickweed tomatillo quandong cauliflower spinach water spinach.</p>
						</div>
					</li>
				</ul>
</div>
<!-- END container -->
               
        <?php require_once("footer_art.php"); ?>
        </div>
    </div>
</div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
