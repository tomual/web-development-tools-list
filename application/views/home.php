<?php $this->load->view('header') ?>

<header>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>site name</h1>
				<div class="subtitle">Website Development Tools</div>
			</div>
		</div>
	</div>
</header>
<div class="tags">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
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
</div>
<div class="container cards">
	<div class="row">
		<?php foreach ($tools as $tool) : ?>
			<a href="<?php echo $tool->url ?>">
				<div class="col-2">
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url("img/" . url_title($tool->name, '-', TRUE) . ".png") ?>" alt="Card image cap">
						<div class="card-body">
							<div class="card-title"><?php echo $tool->name ?></div>
							<p class="card-text"><?php echo $tool->desc ?></p>
							<?php foreach ($tool->tags as $tag) : ?>
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