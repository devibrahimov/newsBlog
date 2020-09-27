
<?php $this->load->view(Svw.'layouts/head');?>
<link href="<?=base_url('assets/site/')?>css/pagination.css" rel="stylesheet">

<?php $this->load->view(Svw.'layouts/header');?>

<div class="container">
			<div class="page-breadcrumbs">
				<h1 class="section-title"><?=$cat[ language().'_name']?></h1>
				<div class="world-nav cat-menu">
					<ul class="list-inline">
						 <?php if($subcats){?>
					<?php foreach($subcats as $cat):?>
						<li ><a href="<?=site_url('')?>category/<?=$cat['id'].'-'.$cat['az_slug']?>"><?=$cat[ language().'_name']?></a></li>
						<?php endforeach ;?>
						 <?php }else{echo ' '; }  ?>
					</ul>
				</div>
			</div>
			<div class="section">
				<div class="row">
					<div class="col-sm-3">
 					 <?php $this->load->view(Svw.'partials/search')?>
 					 <div id="sitebar">
 						<?php $this->load->view(Svw.'partials/banner');?>
 

 						 <div class="widget">

 							<?php $this->load->view(Svw.'partials/hitnews')?>

 						 </div><!--/#widget-->
 					 </div><!--/#sitebar-->
 				 </div>
				 <div class="col-sm-9">

					 <div class="row">
						 <div class="col-sm-12">
							 <div class="section ">
								 <div class="row listing" style="margin-bottom:20px;">
									 <?php if($news){?>
									 <?php foreach($news as $n):?>
									 <div class="col-sm-4 ">
										 <div class="post medium-post">
											 <div class="entry-header">
												 <div class="entry-thumbnail" style=" height:250px;background: url('<?=imageVerify(small_image($n['image'])); ?>') no-repeat;
		                                         background-size: cover;background-position: center center !important;">
													 <!-- <img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/sports/1.jpg" alt="" /> -->
												 </div>
											 </div>
											 <div class="post-content">
												 <div class="entry-meta">
													 <ul class="list-inline">
														 <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?=timeAgo($n['publish_up'])?> </a></li>
														 <!-- <li class="views"><a href="#"><i class="fa fa-eye"></i><?=$n['hit']?></a></li> -->
														 <!-- <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li> -->
													 </ul>
												 </div>
												 <h2 class="entry-title">
													<a href="<?=site_url('chipxeber/').$n['id'].'-'.$n[ language()."_slug"];?>"> <?=substr($n[ language().'_title'],0,50)?>...</a>
												 </h2>
											 </div>
										 </div><!--/post-->
									 </div>
 							 <?php endforeach ; ?>
	<?php }else{echo $cat[ language().'_name'].' - kategoriyası Altında Paylaşım tapılmadı'; }  ?>
								 </div>
							 </div><!--/.section -->

						 </div>
					 </div>
					 <!-- <div class="pagination-wrapper">
						 <ul class="pagination">
							 <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-long-arrow-left"></i> Previous Page</span></a></li>
							 <li><a href="#">1</a></li>
							 <li><a href="#">2</a></li>
							 <li class="active"><a href="#">3</a></li>
							 <li><a href="#">4</a></li>
							 <li><a href="#">5</a></li>
							 <li><a href="#">6</a></li>
							 <li><a href="#">7</a></li>
							 <li><a href="#">8</a></li>
							 <li><a href="#">9</a></li>
							 <li><a href="#">10</a></li>
							 <li><a href="#" aria-label="Next"><span aria-hidden="true">Next Page <i class="fa fa-long-arrow-right"></i></span></a></li>
						 </ul>
					 </div> -->
				 </div><!--/.col-sm-9 -->


			 </div>
			</div><!--/.section-->
		</div><!--/.container-->
	</div><!--/#main-wrapper-->

<?php $this->load->view(Svw.'layouts/footer');?>


	<?php $this->load->view(Svw.'layouts/foot');?>
	<script src="<?=base_url('assets/site/')?>jsk/pagination.js"></script>
<script>
$(document).ready(function()
 {
   $("#tab").pagination({
   items: 12,
   contents: 'listing',
   previous: 'Previous',
   next: 'Next',
   position: 'bottom',
   });
});
</script>
