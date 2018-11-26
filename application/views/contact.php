<?php $this->load->view('header') ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4 offset-lg-4 py-5">
			<h5>Contact Form/Submission Form</h5>
			<p class="py-3">If you would like to contact us or suggest a tool/reference to add to the site, please fill in the form below.</p>
			<form method="post">
				<div class="form-group">
					<label class="label-control">Email <small class="text-muted"> - If you would like a reply</small></label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label class="label-control">Message</label>
					<textarea name="message" class="form-control" rows="4"></textarea>
				</div>
				<input type="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('footer') ?>