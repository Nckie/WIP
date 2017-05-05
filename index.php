<?php require_once "inc/header.php"; ?>

	<section class="frames">
		<div class="frame frame-top fixed"></div>
		<div class="frame frame-right fixed"></div>
		<div class="frame frame-btm fixed"></div>
		<div class="frame frame-left fixed"></div>
	</section>

	<section class="centered-block rel">
		<img src="asset/logo/logo.svg" alt="logo Nickie" id="logo">
		<h1 class="title title-h1"> Hello, <br>
		my name's Nickie</h1>
		<h2 class="title title-h2">Front-end developer &amp; webdesigner</h2>
		<h3 class="title title-h1">Website in progress</h3>
	</section>

	<div class="icon contact fixed js-btn">
		<img src="asset/icons/pen.svg" alt="pen icon" class="pen-img">
		<img src="asset/icons/contact.svg" alt="contact icon" class="contact-img">
	</div>

	<section class="socials abs">
		<a href="https://github.com/Nckie" target="blank">
		<div class="icon social">
			<img src="asset/icons/github.svg" alt="github logo">
		</div>
		</a>

		<a href="https://www.linkedin.com/in/nickie-roudez-04770999/" target="blank">
		<div class="icon social">
			<img src="asset/icons/linkedin.svg" alt="linkedin logo">
		</div>
		</a>

		<a href="https://dribbble.com/Nickie" target="blank">
		<div class="icon social">
			<img src="asset/icons/dribbble.svg" alt="dribbble logo">
		</div>
		</a>
	</section>

	<section class="modal abs js-modal">
		<h1>Contact me</h1>
		<form action="contact.php" method="post">
			<input type="text" class="name" name="name" placeholder="Name">
			<input type="email" class="mail" name="mail" placeholder="Mail">
			<textarea name="msg" class="msg" cols="30" rows="10" placeholder="Message"></textarea>
		</form>
	</section>

<?php require_once "inc/footer.php"; ?>
