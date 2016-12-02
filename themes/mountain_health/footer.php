<?php
/**
 * The template for displaying the footer.
 *
 * @package Mountain_Health_Theme
 */

?>
	</div>
	<!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!--<img class="mountain-logo-footer" src="<?php echo get_template_directory_uri(). "/images/footer_mountain.png " ?>" alt="Mountain Logo"/>-->
			<div class="newsletter">
				<h2 class="footer-title">Join our newsletter</h2>
				<p>Get the latest news about Naturopathy and more.</p>
				<form class="footer-form">
					<input type="email" name="email" value="Example@example.com" id="the-email">
					<input type="submit" name="submit" value="Subscribe">
				</form>
			</div>
			<div class="footer-info">
				<div class="footer_wrapper">
					<h2 class="footer-title">Contact Us</h2>
					<p>Mountain Health
						<br>1037 Cornwall Street
						<br>New Westminster, BC V3M 1S1</p>
					<div class="contact_icon_img">
						<img src="<?php echo get_template_directory_uri(). "/images/Social/Facbook-Dark.png " ?>" alt="Mountain Logo" ?>
						<a href="tel:XXX-XXX-XXXX">XXX-XXX-XXXX</a>
					</div>
					<div class="contact_icon_img">
						<img src="<?php echo get_template_directory_uri(). "/images/Social/Facbook-Dark.png " ?>" alt="Mountain Logo" ?>
						<a href="mailto:info@mountainhealth.com">info@mountainhealth.com</a>
					</div>
				</div>
				<div class="footer_wrapper">
					<h2 class="footer-title">Find Us</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.703308483417!2d-123.0350735712222!3d49.306316813241324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97c6446531682d55!2sMountain+Health+and+Performance!5e0!3m2!1sen!2sca!4v1480396461276"
									width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			<div class="footer_wrapper">
			<h2>Information</h2>
			<p>Hours:</p>
			<p><span class="thick-text-footer">Tues - Fri 9am - 5pm </span><br>
			Closed for lunch from 1pm - 2pm<br>

			Exit Lorem ipsum dolor sit amet.
			Located in Lorem ipsum dolor sit amet.
			For wheelchair access, park in the back.<p>
			</div>

				<div class="copy-footer">
					<p>Copyright &copy; 2016 Mountain Health. All rights reserved.</p>
				</div>
			</div>
			<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->
	<?php wp_footer(); ?>
	</body>

	</html>