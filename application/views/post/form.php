<?php $this->load->view('header') ?>
<div class="col-lg-4 offset-lg-4">
    <h1>Post</h1>
    <?php alerts() ?>
    <form method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?php echo set_value('title') ?>" class="form-control <?php echo is_valid('title') ?>">
            <?php echo form_error('title') ?>
        </div>
		<div class="form-group">
			<label for="category_id">Category</label>
			<input type="text" name="category_id" id="category_id" value="<?php echo set_value('category_id') ?>" class="form-control <?php echo is_valid('category_id') ?>">
			<?php echo form_error('category_id') ?>
		</div>
		<div class="form-group">
			<label for="images">Images</label>
			<input type="text" name="images" id="images" value="<?php echo set_value('images') ?>" class="form-control <?php echo is_valid('images') ?>">
			<?php echo form_error('images') ?>
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<input type="text" name="message" id="message" value="<?php echo set_value('message') ?>" class="form-control <?php echo is_valid('message') ?>">
			<?php echo form_error('message') ?>
		</div>
        <div class="form-group">
            <input type="submit" value="Sign Up" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $this->load->view('footer') ?>
