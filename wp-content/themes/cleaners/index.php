<?php
/**
 * The main template file
 * @package WordPress
 * @subpackage gurukul-education
 * @since 1.0
 * @version 1.4
 */

get_header(); ?>

<div class="container">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<!-- slider-start -->
    <div class="slider">
        <div class="owl-carousel slider">
            <div class="item">
                <div class="slider-img"> <img src="./images/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Domestic &amp; Commercial Cleaning</h1>
                                <p class="slider-text hidden-xs">Cleaning Services we are passionate about providing
                            a flexible service.</p>
                                <a href="about.html" class="btn btn-default btn-lg hidden-sm hidden-xs">Click Here for a Free Estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="./images/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12  col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">We help you to keep your place clean</h1>
                                <p class="slider-text hidden-xs">We use specialize and quality equipment tools for cleaning ! </p>
                                <a href="#" class="btn btn-default btn-lg hidden-sm hidden-xs">meet team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="./images/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12  col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Quality work with Affordable price</h1>
                                <p class="slider-text hidden-xs">We brings professional cleaning services right to your home. </p>
                                <a href="#" class="btn btn-default btn-lg hidden-sm hidden-xs">view services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-close -->
    <!-- service-start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h1>Professional Cleaning Services</h1>
                        <p>We Provided Quality Cleaning Services.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <div class="service-img"><a href="#"><img src="./images/service-1.jpg" alt="" class="img-responsive"></a> </div>
                        <div class="service-content">
                            <h3><a href="#">Office Cleaning</a></h3>
                            <p>Professional cleaning services, office cleaning and cleaning contractors. </p>
                            <a href="#" class="btn-link"> read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <div class="service-img"><a href="#"><img src="./images/service-2.jpg" alt="" class="img-responsive"> </a></div>
                        <div class="service-content">
                            <h3><a href="#">House Cleaning</a></h3>
                            <p>House Cleaning onsectetur terdum vulputate mauris vestibulum ullamcorper eget. </p>
                            <a href="#" class="btn-link"> read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <div class="service-img"><a href="#"><img src="./images/service-3.jpg" alt="" class="img-responsive"></a> </div>
                        <div class="service-content">
                            <h3><a href="#">Commercial Cleaning</a></h3>
                            <p>Eleifend etiam scelerisque tortor sed porta ultrices risus nunc eleifend. </p>
                            <a href="#" class="btn-link"> read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-close -->
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php esc_html_e( 'Posts', 'gurukul-education' ); ?></h2>
	</header>
	<?php endif; ?>

	<div class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
	    $layout_option = get_theme_mod( 'gurukul_education_theme_options','Right Sidebar');
	    if($layout_option == 'Left Sidebar'){ ?>
	    	<div class="row">
	        <div id="sidebar" class="col-md-4 col-sm-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
	        <div id="" class="content_area col-md-8 col-sm-8">
	    	<section id="post_section" class="">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'gurukul-education' ),
	                        'next_text'          => __( 'Next page', 'gurukul-education' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gurukul-education' ) . ' </span>',
	                    ) );
	                ?>
	                <div class="clearfix"></div>
           	 	</div>
			</section>
			</div>
			</div>
			<div class="clearfix"></div>
		<?php }else if($layout_option == 'Right Sidebar'){ ?>
			<div class="row">
			<div id="" class="content_area col-md-8 col-sm-8">
			<section id="post_section" class="">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    // Previous/next page navigation.
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'gurukul-education' ),
	                        'next_text'          => __( 'Next page', 'gurukul-education' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gurukul-education' ) . ' </span>',
	                    ) );
	                ?>
	                <div class="clearfix"></div>
	            </div>
			</section>
			</div>
			<div id="sidebar" class="col-md-4 col-sm-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			</div>
		<?php }else if($layout_option == 'One Column'){ ?>
			<div class="row">
				<div id="" class="content_area col-md-12 col-sm-12">
					<section id="post_section" class="">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content' );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'gurukul-education' ),
			                        'next_text'          => __( 'Next page', 'gurukul-education' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gurukul-education' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			</div>
		<?php }else if($layout_option == 'Three Columns'){ ?>	
			<div class="row">
			<div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>	
			<div id="" class="content_area col-md-6 col-sm-6">
			<section id="post_section" class="">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						
						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    // Previous/next page navigation.
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'gurukul-education' ),
	                        'next_text'          => __( 'Next page', 'gurukul-education' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gurukul-education' ) . ' </span>',
	                    ) );
	                ?>
	                <div class="clearfix"></div>
	            </div>
			</section>
			</div>
			<div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
			</div>
		<?php }else if($layout_option == 'Four Columns'){ ?>
		<div class="row">
		<div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
		<div id="" class="content_area col-md-3">
		<section id="post_section" class="">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content' );

				endwhile;

				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif;
			?>
			<div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'gurukul-education' ),
                        'next_text'          => __( 'Next page', 'gurukul-education' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gurukul-education' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
		</section>
		</div>
		<div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
        </div>
    <?php }else if($layout_option == 'Grid Layout'){ ?>
    	<div id="" class="content_area">
		<section id="post_section" class="">
		<div class="row">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/grid-layout' );

				endwhile;
				
				else :

					get_template_part( 'template-parts/post/grid-layout', 'none' );

				endif;
			?>
			<div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'gurukul-education' ),
                        'next_text'          => __( 'Next page', 'gurukul-education' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gurukul-education' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
		</div>
		</section>
		</div>
		<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();