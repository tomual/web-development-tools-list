<?php $this->load->view('header') ?>

<header>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Site Name</h1>
				<div class="subtitle">Website Development Tools</div>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col">
			<a href="<?php echo base_url('tags/css') ?>" class="badge badge-css">CSS</a>
			<a href="<?php echo base_url('tags/js') ?>" class="badge badge-js">JS</a>
			<a href="<?php echo base_url('tags/icon') ?>" class="badge badge-icon">Icon</a>
			<a href="<?php echo base_url('tags/text') ?>" class="badge badge-text">Text</a>
			<a href="<?php echo base_url('tags/image') ?>" class="badge badge-image">Image</a>
			<a href="<?php echo base_url('tags/framework') ?>" class="badge badge-framework">Framework</a>
			<a href="<?php echo base_url('tags/reference') ?>" class="badge badge-reference">Reference</a>
			<a href="<?php echo base_url('tags/read') ?>" class="badge badge-read">Read</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php foreach ($tools as $tool): ?>
			<a href="<?php echo $tool->url ?>">
				<div class="col-2">
					<div class="card">
						<img class="card-img-top" src="http://brutalistwebsites.com/_img/asuk.work.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><?php echo $tool->name ?></h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
							<?php foreach ($tool->tags as $tag): ?>
							<a href="<?php echo base_url("tags/$tag") ?>" class="badge badge-js"><?php echo $tag ?></a>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</a>
		<?php endforeach ?>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col">
				Footer
			</div>
		</div>
	</div>
</footer>

<?php $this->load->view('footer') ?>