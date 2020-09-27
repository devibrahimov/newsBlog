

<?php $this->load->view(Svw.'layouts/head');?>

<?php $this->load->view(Svw.'layouts/header');?>




 <div class="container">

				<div class="add inner-add text-center">
				<a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add2.jpg" alt="" /></a>
				</div><!--/.section-->

			<div class="page-breadcrumbs">
				<h1 class="section-title"><?=$cat_name[$news['catid']]?></h1>
				<div class="world-nav cat-menu">

				</div>
			</div>
			<div class="section">
				<div class="row">
					<div class="col-sm-9">
						<div id="site-content" class="site-content">
							<div class="row">
								<div class="col-sm-12">
									<div class="left-content">
										<div class="details-news">
											<div class="post  ">
												<div class="entry-header">
													<div class="entry-thumbnail" style=" height:497px;background: url('<?php if( base_url('').$news['image']){echo base_url('').$news['image']; }else{echo base_url('').'assets/site/images/chipreklamveren.png';}?>') no-repeat;
                                        background-size: cover;background-position: center center !important;">
 													</div>
                           <!-- <img class="img-responsive" src="<?php if( base_url('').$news['image']){echo base_url('').$news['image']; }else{echo base_url('').'assets/site/images/chipreklamveren.png';}?>" alt="" /> -->
												</div>
												<div class="post-content">
													<div class="entry-meta">
														<ul class="list-inline">
															<!-- <li class="posted-by"><i class="fa fa-user"></i> by <a href="#">Owen Williams</a></li> -->
															<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?=timeAgo($news['publish_up'])?>  </a></li>

															<li class="views"><a href="#"><i class="fa fa-eye"></i> <?=$news['hit'] ?> </a></li><?php updatehit($news['id'] ,$news['hit']+1)?>
															<!-- <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li> -->
														</ul>
													</div>
													<h2 class="entry-title">
													<?=$news[ language()."_title"]?>
													</h2>
													<div class="entry-content">
													<?=$news[ language().	'_text'];?>

														<!-- <ul class="list-inline share-link">
															<li><a href="#"><img src="<?=base_url('assets/site/')?>images/others/s1.png" alt="" /></a></li>
															<li><a href="#"><img src="<?=base_url('assets/site/')?>images/others/s2.png" alt="" /></a></li>
															<li><a href="#"><img src="<?=base_url('assets/site/')?>images/others/s3.png" alt="" /></a></li>
															<li><a href="#"><img src="<?=base_url('assets/site/')?>images/others/s4.png" alt="" /></a></li>
														</ul> -->
													</div>
												</div>
											</div><!--/post-->
										</div><!--/.section-->
									</div><!--/.left-content-->
								</div>

							</div>
						</div><!--/#site-content-->

					</div><!--/.col-sm-9 -->

					<div class="col-sm-3">
						<div id="sitebar">
							<div class="widget">
								<div class="add featured-add">
									<a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add1.jpg" alt="" /></a>
								</div>
							</div><!--/#widget-->
 

							<div class="widget">

								<?php $this->load->view(Svw.'partials/hitnews')?>

							</div><!--/#widget-->
						</div><!--/#sitebar-->
					</div>

				</div>
			</div><!--/.section-->

      				<div class="add inner-add text-center">
      				<a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add2.jpg" alt="add2.jpg" /></a>
      				</div><!--/.section-->

		</div><!--/.container-->
	</div><!--/#main-wrapper-->


<?php $this->load->view(Svw.'layouts/footer');?>


	<?php $this->load->view(Svw.'layouts/foot');?>
