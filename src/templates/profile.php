<section class="my-5">
	<h4>Welcome, <?= $username ?>!</h4>
</section>
<p>Session data: </p>
<pre><code><?= $sessionData ?></code></pre>
<hr class="my-5">
<p><a href="/logout">Logout</a></p>
<section class="container">
	<form action="" method="post">
		
		<label for="name">Name</label>
		<input type="text" name="name" id="name" 
		placeholder="name" class="form-control <?= isset($formError['name']) ?
		'is-invalid' : ''; ?>">
		
		<?php if(isset($formError['name'])) {
			echo sprintf('<div class="invalid-feedback">%s</div>',
			htmlentities($formError['name']));
		} ?></div>
		
		<label for="email">Email</label>
		<input type="email" name="email" id="name"
		placeholder="email" class="form-control <?= isset($formError['email']) ?
		'is-invalid' : ''; ?>">

		<?php if(isset($formError['email'])) {
			echo sprintf('<div class="invalid-feedback">%s</div>',
			htmlentities($formError['email']));
		} ?></div>

		<label for="textarea">Message</label>
		<input type="textarea" name="textarea" id="textarea"
		placeholder="Message" class="form-control <?= isset($formError['message']) ?
		'is-invalid' : ''; ?>">

		<?php if(isset($formError['message'])) {
			echo sprintf('<div class="invalid-feedback">%s</div>',
			htmlentities($formError['message']));
		} ?></div>
	</form>
</section>