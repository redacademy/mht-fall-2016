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
					<input class="footer-email" type="email" name="email" placeholder="Example@example.com" id="the-email">
					<input class="primary-button primary-button-subscribe" type="submit" name="submit" value="Subscribe">
				</form>
			</div>
			<div class="footer-info">
				<div class="footer_wrapper">
					<h2 class="footer-title">Contact Us</h2>
					<p><span class="thick-span">Mountain Health</span>
						<br>1037 Cornwall Street
						<br>New Westminster, BC V3M 1S1</p>
					<div class="contact_icon_img">
						<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone.png" alt="Phone logo">
						<a class="link-footer" href="tel: 604-442-5864"> 604-442-5864</a>
					</div>
					<div class="contact_icon_img">
						<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/email.png" alt="Email logo">
						<a class="link-footer"href="mailto:amandajchay@gmail.com">amandajchay@gmail.com</a>
					</div>
				</div>
				<div class="footer_wrapper">
					<h2 class="footer-title">Find Us</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.427445150521!2d-123.03500823466057!3d49.306188277026386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486708c9df02d4b%3A0x97c6446531682d55!2sMountain+Health+and+Performance!5e0!3m2!1sen!2sca!4v1480714880107"
							width="280" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			<div class="footer_wrapper">
			<h2 class="footer-title">Information</h2>
			<p>Hours:<br>
			<span class="thick-span">Tues - Fri 9am - 5pm </span><br>
			Closed for lunch from 1pm - 2pm<br>
			<br>
			Exit Lorem ipsum dolor sit amet.
			Located in Lorem ipsum dolor sit amet.
			For wheelchair access, park in the back.<p>
			</div>
		</div>
				<div class="copy-footer">
					<p>Copyright &copy; 2016 Mountain Health. All rights reserved.</p>
				</div>
			<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->
	<?php wp_footer(); ?>
	</body>

	</html>
