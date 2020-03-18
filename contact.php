<?php include('./inc/header.php'); ?>
<section class="page-menu">
	<nav aria-label="breadcrumb">
		<ul class="breadcrumb">
			<li><a href="">Home</a></li>
			<li>Contact</li>
		</ul>
	</nav>
</section>
<section class="contact-content">
	<h1>Contact Us</h1>
	<div class="row">
		<div class="col-md-5">
			<form>
				<div class="form-group">
					<input type="text" placeholder="Full Name" required>
				</div>
				<div class="form-group">
					<input type="email" placeholder="Email Address" required>
				</div>
				<div class="form-group">
					<textarea placeholder="Message"></textarea>
				</div>
				<div class="form-send">
					<button type="submit" class="innerBottom">Submit</button>
				</div>
			</form>
		</div>
		<div class="col-md-7">
			<div class="contact-information">
				<h3>For more Information</h3>
				<p>Bijay Barakoti <span>( <i class="fas fa-phone-volume"></i> 0123456789)</span></p>
				<p>Sanjay Barakoti <span>( <i class="fas fa-phone-volume"></i> 0123456789)</span></p>
				<p><i class="fas fa-envelope"></i> <a href="mailto:info@bobnepal.com">info@bobnepal.com</a></p>
			</div>
		</div>
	</div>
</section>
<?php include('./inc/footer.php'); ?>