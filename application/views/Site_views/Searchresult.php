
<?php $this->load->view(Svw.'layouts/head');?>
<link href="<?=base_url('assets/site/')?>css/pagination.css" rel="stylesheet">

<?php $this->load->view(Svw.'layouts/header');?>

<div class="container">
			<div class="page-breadcrumbs">
				<!-- <h1 class="section-title"><?=$cat[ language().'_name']?></h1>
				<div class="world-nav cat-menu">
					<ul class="list-inline">
						 <?php if($subcats){?>
					<?php foreach($subcats as $cat):?>
						<li ><a href="<?=site_url('')?>category/<?=$cat['id'].'-'.$cat['az_slug']?>"><?=$cat[ language().'_name']?></a></li>
						<?php endforeach ;?>
						 <?php }else{echo ' '; }  ?>
					</ul>
				</div> -->
			</div>
			<div class="section">
				<div class="row">
					<div class="col-md-3">
						<?php $this->load->view(Svw.'partials/search')?>
 					 <div id="sitebar">
 					<?php $this->load->view(Svw.'partials/banner');?>

 						 

 						 <div class="widget">

 								<?php $this->load->view(Svw.'partials/hitnews')?>

 						 </div><!--/#widget-->
 					 </div><!--/#sitebar-->
 				 </div>
				 <div class="col-md-9">

					 <div class="row">
							 <div class="section ">
								 	 <?php if($searchres){?>
								 <div class="row listing" style="margin-bottom:20px;">

									 <?php foreach($searchres as $n):?>
									 <div class="col-sm-4">
										 <!-- <div class="post-content">

										<h2 class="entry-title">
											<a href="<?=site_url('chipxeber/').$n['id'].'-'.$n[ language()."_slug"];?>"> <?= $n[ language().'_title'] ?> </a>
										</h2>
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?=timeAgo($n['publish_up'])?> </a></li>
												<li class="views"><a href="#"><i class="fa fa-eye"></i><?=$n['hit']?></a></li>

											</ul>
										</div>
										<div class="entry-content">
											<p><?=mb_substr($n[ language().'_text'],0,150, "utf-8")?></p>
										</div>
									</div> -->
									<div class="post medium-post post-height">
										<div class="entry-header">
											<div class="entry-thumbnail" style=" height:200px;background: url('<?=imageVerify(small_image($n['image']) ); ?>') no-repeat; background-size: cover;background-position: center center !important;">
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
											 <a href="<?=site_url('chipxeber/').$n['id'].'-'.$n[ language()."_slug"];?>"> <?=mb_substr($n[ language().'_title'],0,51,'UTF-8')?>...</a>
											</h2>
										</div>
									</div><!--/post-->

									 </div>
 							 <?php endforeach ; ?>
								</div>
				   <?php }else{ ?>
						 <div class="row  " >
								 <div class="col-md-6"  style=" height:350px;background: url('<?=base_url('assets/site/images/search.gif') ;?>') no-repeat;
								 background-size: cover;background-position: center center !important;">
 <h4 class="entry-title ">AXTARDIGINIZ SORGUYA AID NETICE TAPILMADI</h4>
								 </div>

						<?php	 }  ?>
								 </div>
							 </div><!--/.section -->


					 </div>

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
