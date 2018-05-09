<?php /* Template Name: Verkoop */ ?>

<?php get_header(); ?>
<div class="header_imagedetailpage">
<div class="large-12 logo_row columns"><h1>Kinderkledingbeurs Montfoort</h1></div>
<?php wp_nav_menu( array( 'theme_location' => 'hoofd-menu' ) ); ?>
</div>
<div class="row detailtekst">
	<div id="box1" class="large-6 medium-6 columns">
		<h1>Verkoop</h1>
		<?php the_field('tekst_verkoop'); ?>
	</div>
	<div id="box2" class="large-6 medium-6 columns">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/boy1.png" title="" alt="" />
	</div>
</div>
<?php get_footer(); ?>