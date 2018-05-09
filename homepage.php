<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
			
	<div id="content">
	

	<div class="header_image">
	<div class="large-12 logo_row columns"><h1>Kinderkledingbeurs Montfoort</h1></div>
		<?php wp_nav_menu( array( 'theme_location' => 'hoofd-menu' ) ); ?>
      	<img src="<?php the_field('header_image'); ?>" alt="" />

	</div>

	

		<div id="inner-content" class="row">
	
		    <main id="inleidingstekst_home" class="large-6 medium-12 columns"  role="main">
		    	<h1>Welkom!</h1>
			    <?php the_field('inleidingstekst_home'); ?>
																								
		    </main> <!-- end #main -->
		    <div id="clothes_image" class="large-6 medium-12 columns">
		    <img src="<?php bloginfo('template_directory'); ?>/assets/images/boy1.png" title="" alt="" />
		    </div>
			</div> <!-- end #inner-content -->

		<div class="row in_ver">
			<div id="inleveren_verkopen" class="small-12 medium-6 large-3 columns">
		    	<div class="bubble bubble_down">
		    		<h4>Inleveren:</h4>
		    		<h3><?php the_field('datum_inleveren'); ?></h3>
		    		<ul>
		    			<li><?php the_field('tijd_inleveren1'); ?></li>
		    			<li><?php the_field('tijd_inleveren2'); ?></li>
		    			<li><?php the_field('tijd_inleveren3'); ?></li>
		    		</ul>
		    	</div>
			</div>
		    <div id="inleveren_verkopen" class="small-12 medium-6 large-3 columns">
		    	<div class="bubble bubble_up">
		    		<h4>Verkoop:</h4>
		    		<h3><?php the_field('datum_verkoop'); ?></h3>
		    		<ul>
		    			<li><?php the_field('tijd_verkoop'); ?></li>
		    		</ul>
		    	</div>
		    </div>
			<div id="inleveren_verkopen" class="small-8 medium-6 columns">
				<p></p>
			</div>
		</div>

		  	
		
		
		<div class="row" id="historie">
			<div class="large-6 medium-6 columns">
			<h1>Hoe het begon..</h1>
		    	<?php the_field('historie'); ?>
		    </div>
		    <div class="large-6 medium-6 columns">
		    	<?php the_field('historie2'); ?>
			</div>
		</div>
			<div id="gallerij">
			<div class="row">
  				<div class="small-2 small-centered columns"><h2>Gallerij</h2></div>
			</div>
			<div class="row small-up-2 medium-up-3 large-up-3">
				<div class="column column-block">
				<img src="<?php the_field('image_1'); ?>" alt="" class="" />
				</div>
				<div class="column column-block">
				<img src="<?php the_field('image_2'); ?>" alt="" class="" />
				</div>
				<div class="column column-block">
				<img src="<?php the_field('image_3'); ?>" alt="" class="" />
				</div>
				<div class="column column-block">
				<img src="<?php the_field('image_4'); ?>" alt="" class="" />
				</div>
				<div class="column column-block">
				<img src="<?php the_field('image_5'); ?>" alt="" class="" />
				</div>
				<div class="column column-block">
				<img src="<?php the_field('image_6'); ?>" alt="" class="" />
				</div>
			</div>
			</div>

		<div class="row" id="vacatures">
			<div class="large-6 medium-6 smedium-12 medium-12 columns">
				<h2>Vacatures</h2>
		    	<?php the_field('vacatures'); ?>
		    	<a href="/kkb/index.php/contact" class="contact_button">Contact</a>
		    </div>
		    <div class="large-6 medium-6 columns kids_icons">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/girl1.png" title="" alt="" />
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/girl2.png" title="" alt="" class="girl2" />
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/boy1.png" title="" alt="" />
			</div>
		</div>
		<div class="row" id="goededoelen">
		<div id="goededoelen_links" class="large-6 medium-6 columns">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/rainbow.png" title="" alt="" />
		</div>
		<div id="goededoelen_rechts" class="large-6 medium-6 columns">
		<h2>Goede doelen</h2>
		    <?php the_field('goede_doelen'); ?>
		</div>
		</div>
		
	</div> <!-- end #content -->
	

<?php get_footer(); ?>