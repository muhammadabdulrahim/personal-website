<?php global $data; ?>
<div id="<?php echo $data['id']; ?>">
	<div class="inner">
		<h2><?php echo $data['title']; ?></h2>
		<p><?php echo $data['content']; ?></p>
		<?php
			if( iskeyset('pkg',$data) )
			{
				?><div class="portfolio"><?php
				foreach( $data['pkg'] as $node)
				{
					?><div class="node"><?php
					if( iskeyset('img',$node) )
					{
						?><img src="<?php echo $node['img']; ?>"><?php
					}

					if( iskeyset('title',$node) )
					{
						?><span class="title"><?php echo $node['title']; ?></span><?php
					}

					if( iskeyset('caption',$node) )
					{
						?><span class="caption"><?php echo $node['caption']; ?></span><?php
					}
					?></div><?php
				}
				?></div><?php
			}
		?>
	</div>
</div>
