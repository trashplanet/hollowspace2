<?php /* Template Name: Static page template */ ?>
<?php get_header(); ?>
	<div id="content" role="main" post-id="<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Slider -->
			<?php include('includes/slider.php') ?>
			<!-- Hero -->
			<?php include('includes/hero.php') ?>
			<!-- Content-->
			<section id="elements" class="padT60 padB60">
				<div class="row">
					<div class="columns medium-12">
				    	<?php the_content(); ?>
				    </div>
			    </div>
			</section>
			<!-- Testimonials -->
			<?php include('includes/testimonials.php') ?>
			<!-- CTA -->
			<?php include('includes/cta.php') ?>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>