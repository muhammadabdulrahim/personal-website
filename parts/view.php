<?php global $data; ?>
<div id="<?php echo $data['id']; ?>">
	<div class="inner">
		<h2><?php echo $data['title']; ?></h2>
		<p><?php echo $data['content']; ?></p>
		<?php create_portfolio($data['pkg']); ?>
	</div>
</div>
