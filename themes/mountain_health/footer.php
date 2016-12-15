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
						<br>New Westminster, BC<br> V3M 1S1</p>
					<div class="contact_icon_img">
						<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone@3x.png" alt="Phone logo">
						<a class="link-footer" href="tel: 604-442-5864"> 604-442-5864</a>
					</div>
					<div class="contact_icon_img">
						<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/email.png" alt="Email logo">
						<a class="link-footer" href="mailto:amandajchay@gmail.com">amandajchay@gmail.com</a>
					</div>
				</div>
				<div class="footer_wrapper">
					<h2 class="footer-title">Find Us</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31601.00220805475!2d-122.94492037113933!3d49.1974398107171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d879f04c5769%3A0xc677e8cb21b082da!2s1037+Cornwall+St%2C+New+Westminster%2C+BC+V3M+1S1!5e0!3m2!1sen!2sca!4v1481451221519" width="280" height="220"  frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			<div class="footer_wrapper">
			<h2 class="footer-title">Information</h2>
			<p>Hours:<br>
			<span class="thick-span">By appointment only</span><br>
			Street parking only<br>
</p>
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
