<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage gurukul-education
 * @since 1.0
 * @version 1.4
 */

?>
<ul>
	<li class="active"><a href="index.html" title="Home">Home</a></li>
	<li><a href="about.html" title="About us">About us</a> </li>
	<li class="has-sub"><a href="#" title="Service">Service</a>
		<ul>
			<li><a href="service-list.html" title="Service-list">Service list</a></li>
			<li><a href="service-single.html" title="Service-single">Service Single</a></li>
		</ul>
	</li>
	<li><a href="pricing.html" title="Pricing">Pricing</a></li>
	<li class="has-sub"><a href="blog-default.html" title="Blog ">Blog</a>
		<ul>
			<li><a href="blog-default.html" title="Blog">Blog Default</a></li>
			<li><a href="blog-single.html" title="Blog Single ">Blog Single</a></li>
		</ul>
	</li>
	<li class="has-sub"><a href="#" title="Features ">Features</a>
		<ul>
			<li><a href="testimonials.html" title="Testimonials">Testimonials</a>
				<li><a href="faq.html" title="FAQ">FAQ</a></li>
				<li><a href="404-error.html" title="404-error">404-error</a> </li>
				<li><a href="styleguide.html" title="Styleguide">styleguide</a> </li>
		</ul>
		</li>
		<li><a href="contact-us.html" title="Contact Us">Contact Us</a> </li>
</ul>
<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>