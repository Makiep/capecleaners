<?php
/**
 * The sidebar containing the main widget area
 * @package WordPress
 * @subpackage cleaner
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
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
<?php dynamic_sidebar( 'sidebar-1' ); ?>