<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Hero -->
        <section id="hero">
            <div class="hero-inner">
                <div class="row">
                    <div class="large-12 columns text-center">
                        <p class="spaceship offWhite thin">( <span class="darkPink bold windows">• • •</span> )</p>
                        <h1 class="heading white thin"><?php echo bloginfo ( name ); ?></h1>
                        <p class="subheading offWhite thin"><?php echo bloginfo ( description ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="poems">
        	<!-- test -->
            <div class="row poem">
                <!-- Title -->
                <div class="large-6 medium-3 columns text-right">
                    <p class="bold"><?php the_title(); ?></p>
                </div>
                <!-- Content -->
                <div class="large-6 medium-9 columns">
                	<div class="content-area">
                		<?php the_content(); ?>
                	</div>
                </div>
			</div>
        </section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>