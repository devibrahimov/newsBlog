<?php $newsumumixeber = get_umumixeber();?>
<h4 class="section-title title">Ümumi Xəbərlər !</h4>

<ul class="post-list">

	<?php foreach($newsumumixeber  as $news):?>
		<li>
			<div class="post small-post">
				<div class="entry-header">
					<div class="entry-thumbnail"  >
						<img class="w-100 height-100" src="<?=imageVerify(small_image($news['image']));?>" alt="<?= $news['image']  ;?>">
						</div>
				</div>
				<div class="post-content">
					<div class="video-catagory">
					<h3  class="entry-title">	<a href="#"><?=$cat_name[$news['catid'] ]?></a></h3>
					</div>
					<h5>
						<a href="<?=site_url('chipxeber/').$news['id'].'-'.$news['az_slug']?>"><?= $news[ language().'_title'] ;?></a>
					</h5>
					<h6  class="entry-title"><?=timeAgo($news['publish_up'])?></h6>
				</div>
			</div><!--/post-->
		</li>
		 <?php endforeach;?>
</ul>
