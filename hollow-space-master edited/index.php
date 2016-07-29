<?php get_header(); ?>
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
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        		<?php get_template_part( 'entry' ); ?>
        	<?php endwhile; endif; ?>
        </section>
<?php get_footer(); ?>