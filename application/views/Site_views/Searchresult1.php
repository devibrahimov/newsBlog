
<?php $this->load->view(Svw.'layouts/head');?>
<link href="<?=base_url('assets/site/')?>css/pagination.css" rel="stylesheet">

<?php $this->load->view(Svw.'layouts/header');?>


<div class="container">

			<div class="section">
				<div class="row">
					<div class="col-sm-9  "style="background-color:white;">
                    <?php if($searchres){?>
						<div id="site-content" class="site-content">

							<div class="section listing-news">

                            <?php foreach($searchres as $row):?>

								<div class="post">
									<div class="entry-header">
                   <div class="entry-thumbnail" style=" height:250px;background: url('<?=base_url('').small_image($row['image']);?>') no-repeat; background-size: cover;background-position: center center !important;">

										</div>
									</div>
									<div class="post-content">
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i><?=timeAgo($row['publish_up'])?> </a></li>
												<li class="views"><a href="#"><i class="fa fa-eye"></i><?=$row['hit']?></a></li>
												<!-- <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li> -->
											</ul>
										</div>
										<h2 class="entry-title">
											<a href="news-details.html"><?=$row[ language().'_title']?></a>
										</h2>
										<div class="entry-content">
											<p><?=substr($row[ language().'_title'],0,55);?></p>
										</div>
									</div>
                                </div><!--/post-->



                                <?php endforeach;?>

							</div>
						</div><!--/#site-content-->

                                <?php } else{?>
                                    <div class="row  " style="background-color:#0091ac; important">
                                        <div class="col-md-2"  style=" height:150px;background: url('<?=base_url('assets/site/images/search.gif') ;?>') no-repeat;
                                        background-size: cover;background-position: center center !important;">

                                        </div>
                                        <div class="col-md-10">
                                        <h4 class="entry-title">AXTARDIGINIZ SORGUYA AID NETICE TAPILMADI</h4>

                                        </div>


                                    </div>
                                <?php }?>
					</div><!--/.col-sm-9 -->

					<div id="sticky" class="col-sm-3">
						<div id="sitebar">
							<div class="widget">
								<div class="add featured-add">
									<a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add1.jpg" alt="" /></a>
								</div>
							</div><!--/#widget-->
 
						</div><!--/#sitebar-->
					</div>
				</div>
			</div><!--/.section-->
		</div><!--/.container-->
	</div><!--/#main-wrapper-->



<?php $this->load->view(Svw.'layouts/footer');?>
<?php $this->load->view(Svw.'layouts/foot');?>
<script src="<?=base_url('assets/site/')?>js/pagination.js"></script>
<script>
$(document).ready(function()
 {
   $("#tab").pagination({
   items:10,
   contents: 'listing-news',
   previous: 'Previous',
   next: 'Next',
   position: 'bottom',
   });
});
</script>
