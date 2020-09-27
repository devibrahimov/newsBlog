<?php $newshit = get_hit_news();?>
<h4 class="section-title title">Ən çox oxunan xəbərlər!</h4>

<ul class="post-list">

	<?php foreach($newshit  as $news):?>
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
					<h6  class="entry-title"> <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news['az_slug']?>"><?= $news[ language().'_title'] ;?></a></h6>
				</div>
			</div><!--/post-->
		</li>
		 <?php endforeach;?>
</ul>
