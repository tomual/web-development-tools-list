<?php $this->load->view('header') ?>

<header>
	<div class="container">
		<div class="row">
			<a href="<?php echo base_url() ?>">
					<div class="col" style="background-image: url('<?php echo base_url('img/logo.png') ?>')">
					<h1>site name</h1>
					<div class="subtitle">Website Development Tools</div>
				</div>
			</a>
		</div>
	</div>
</header>
<div class="tags">
	<div class="container">
		<div class="row">
			<div class="col">
				<a href="<?php echo base_url('tag/css') ?>" class="badge badge-css">CSS</a>
				<a href="<?php echo base_url('tag/js') ?>" class="badge badge-js">JS</a>
				<a href="<?php echo base_url('tag/icon') ?>" class="badge badge-icon">Icon</a>
				<a href="<?php echo base_url('tag/text') ?>" class="badge badge-text">Text</a>
				<a href="<?php echo base_url('tag/image') ?>" class="badge badge-image">Image</a>
				<a href="<?php echo base_url('tag/library') ?>" class="badge badge-library">Library</a>
				<a href="<?php echo base_url('tag/reference') ?>" class="badge badge-reference">Reference</a>
				<a href="<?php echo base_url('tag/read') ?>" class="badge badge-read">Read</a>
				<a href="<?php echo base_url('tag/template') ?>" class="badge badge-template">Template</a>
				<a class="badge badge-template disabled">&nbsp;</a>
			</div>
		</div>
	</div>
</div>
<div class="container cards">
	<div class="row">
		<?php foreach ($tools as $tool) : ?>
			<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
				<a href="<?php echo $tool->url ?>">
					<div class="card">
						<div class="card-img-top" style="background-image:url('<?php echo base_url("img/" . url_title($tool->name, '-', TRUE) . ".jpg") ?>')" alt="Card image cap"></div>
						<div class="card-body">
							<div class="card-title"><?php echo $tool->name ?></div>
							<p class="card-text"><?php echo $tool->desc ?></p>
							<?php foreach ($tool->tags as $tag) : ?>
							<a href="<?php echo base_url("tag/$tag") ?>" class="badge badge-js"><?php echo $tag ?></a>
							<?php endforeach ?>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?>
	</div>
	<div class="row">
		<div class="col">
			<?php $this->load->view('pagination') ?>
		</div>
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