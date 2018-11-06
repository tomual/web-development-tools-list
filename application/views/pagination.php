<?php 
	$pages = ceil($pagination['total'] / $pagination['limit']);
	$page = $this->input->get('page') ? $this->input->get('page') : 1;
?>
<?php if($pagination['total'] > $pagination['limit']): ?>
<nav aria-label="Pagination">
	<ul class="pagination">
		<li class="page-item <?php if($page == 1) echo 'disabled'?>">
			<a class="page-link" href="<?php if($page != 1) echo unpaginated_url() . '?page=' . strval($page - 1) ?>" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
			<span class="sr-only">Previous</span>
			</a>
		</li>
		<?php if($pages > 8 && $page <= 2): ?>
			<li class="page-item <?php if($page == 1) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=1">1</a></li>
			<li class="page-item <?php if($page == 2) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=2">2</a></li>
			<li class="page-item <?php if($page == 3) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=3">3</a></li>
			<li class="page-item disabled"><a class="page-link" href="">&#8230;</a></li>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $pages ?>"><?php echo $pages ?></a></li>
		<?php elseif($pages > 8 && $page > $pages - 2): ?>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=1">1</a></li>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=2">2</a></li>
			<li class="page-item disabled"><a class="page-link" href="">&#8230;</a></li>
			<li class="page-item <?php if($page == $pages - 2) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $pages - 2 ?>"><?php echo $pages - 2 ?></a></li>
			<li class="page-item <?php if($page == $pages - 1) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $pages - 1 ?>"><?php echo $pages - 1 ?></a></li>
			<li class="page-item <?php if($page == $pages) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $pages ?>"><?php echo $pages ?></a></li>
		<?php elseif($pages > 8): ?>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=1">1</a></li>
			<li class="page-item disabled"><a class="page-link" href="">&#8230;</a></li>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
			<li class="page-item active"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $page ?>"><?php echo $page ?></a></li>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li>
			<li class="page-item disabled"><a class="page-link" href="">&#8230;</a></li>
			<li class="page-item"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $pages ?>"><?php echo $pages ?></a></li>
		<?php else: ?>
			<?php for($i = 1; $i <= $pages; $i++): ?>
				<li class="page-item <?php if($page == $i) echo 'active' ?>"><a class="page-link" href="<?php echo unpaginated_url() ?>?page=<?php echo $i ?>"><?php echo $i ?></a></li>
			<?php endfor ?>
		<?php endif ?>
		<li class="page-item <?php if($page == $pages) echo 'disabled'?>">
			<a class="page-link" href="<?php if($page != $pages) echo unpaginated_url() . '?page=' . strval($page + 1) ?>" aria-label="Next">
				<span class="sr-only">Next</span>
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>
<?php endif ?>