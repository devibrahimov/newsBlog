
<?php $this->load->view(Svw.'layouts/head');?>
<link href="<?=base_url('assets/site/')?>css/calendar.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url('assets/site/')?>css/jquery-ui-datepicker.min.css">

 <?php $this->load->view(Svw.'layouts/header');?>

<?=$this->lang->line('yazi');?>

<div class="container">
			<div class="section">
				<div class="row">
					<div class="site-content col-md-9">
						<div class="row">
							<div class="col-sm-8">
								<div id="home-slider">

								<!--/post-->
								<?php foreach($slidernews as $news):?>
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<div  style=" height:350px;background: url('<?=$news['image'];?>') no-repeat;
                                        background-size: cover;background-position: center center !important;"></div>
												<!-- <img class="img-responsive" style="" src="<?=base_url('assets/site/')?>images/post/slider/1.jpg" alt="" /> -->
											</div><?php base_url('assets\uploads\news\thumb/').small_image($news['image']);?>
											<div class="catagory entertainment"><a href="#"><?=$cat_name[$news['catid'] ]?></a></div>
										</div>
										<div class="post-content">
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> <?=timeAgo($news['publish_up'])?></a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#"><?=$news['hit']?></a></li>
													<!-- <li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li> -->
													<!-- <li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li> -->
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>"><?=$news['az_title']?></a>
											</h2>
										</div>
									</div>
								<?php endforeach;?>

                 </div>
							</div>


							<!-- slider -->

							<div class="col-sm-4">
								
							</div>

						</div>

						<div class="row" >
						<?php foreach($subslidernews as $news):?>
							<div class="col-sm-4">
								<div class="post feature-post post-height">
									<div class="entry-header">
										<div class="entry-thumbnail"style=" height:220px;background: url('<?=imageVerify(small_image($news['image']) );?>') no-repeat;
                                        background-size: cover;background-position: center center !important;">
 										</div>
										<div class="catagory technology"><span><a href="#"><?=$cat_name[$news['catid'] ]?></a></span></div>
									</div>
									<div class="post-content">
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> <?=timeAgo($news['publish_up']);?> </a></li>
												<li class="views"><i class="fa fa-eye"></i><a href="#"><?=$news['hit']?></a></li>
												<!-- <li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li> -->
											</ul>
										</div>
										<h2 class="entry-title">
										<a href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>"><?=$news['az_title']?></a>
										</h2>
									</div>
								</div><!--/post-->

							</div>

							<?php endforeach ;?>

						</div>


            <div class="section add inner-add">
              <a href="<?=site_url('/chipabunelik')?>"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/YR.gif" alt="" /></a>
            </div><!--/.section-->


					</div><!--/#content-->

					<div class="col-md-3 visible-md visible-lg">

									<div class="widget" id="weatherContainer"style=" height:220px;background-size: cover;background-position: center center !important;">
										<div style=" height:220px;background-color: #0000008a;">
											<div id="weatherDescription">
												<h2  id="cityHeader"></h2>
												<div id="weathermain">
													<span id="temperature"></span> <span><img id="documenticonimg" ></span>
													<div id="weatherDescriptionHeader"></div>
												</div>

												<div id="windspeed"></div>
											</div>
										</div>
									</div><!--/#widget-->

						<div class="  featured-add">
							<!-- <a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add1.jpg" alt="" /></a> -->


							<div class="stock-exchange text-center">
								<div class="stock-exchange-zone">
									<a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/gallery/stock.png" alt="" /></a>
								</div>
								<div class="stock-header">

								</div>
								<div class="stock-reports">
								  <div class="com-details">
										<div class="row">
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>usd.png" width="25px"  ></div>
										<div class="col-xs-8 com-name"> <?=$valyuta['usd']?> </div>
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" ></div>
										</div>
									</div>
									<div class="com-details">
										<div class="row">
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>eur.png" width="25px"  ></div>
										<div class="col-xs-8 com-name"> <?=$valyuta['eur']?> </div>
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" ></div>
										</div>
									</div>
									<div class="com-details">
										<div class="row">
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>rub.png" width="25px"  ></div>
										<div class="col-xs-8 com-name"> <?=$valyuta['rub']?> </div>
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" ></div>

										</div>
									</div>
									<div class="com-details">
										<div class="row">
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>try.png" width="25px"  ></div>
										<div class="col-xs-8 com-name"> <?=$valyuta['try']?> </div>
										<div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" ></div>
										</div>
									</div>

								</div>
							</div>


						</div>

         
				</div>
			</div><!--/.section-->

			<script type="text/javascript" src="<?=base_url('assets/site/')?>js/weather.js"></script>
			<div class="section">
				<div class="latest-news-wrapper">
					<div id="latest-news">

					</div>
				</div><!--/.latest-news-wrapper-->
			</div><!--/.section-->
			<!-- <div class="section add inner-add">
				<a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add2.jpg" alt="" /></a>
			</div>  -->

			<div class="section">
				<div class="row">

	<div class="col-md-9 col-sm-8">
		<?php foreach($athomecategories as $row):?>

		<h2 class="section-title "><?=$row['az_name']?></h2>
		<div class="latest-news-wrapper" style="margin-bottom:15px">
				<div id="latest-news">

				<div class="row">
					<?php  foreach($homenews as $news):?>

						<?php if( $row['id'] == $news['catid']):?>
							<div class="col-md-4 col-6 " style="height:400px !important;">
							<a href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>">
								<div class="post medium-post">
									<div class="entry-header">
											<div class="entry-thumbnail">
											<!-- <div class="entry-thumbnail" style=" height:200px;background: url('<?=imageVerify(small_image($news['image']) );?>') no-repeat;
                                        background-size: cover;background-position: center center !important;">
											</div> -->
												<img class="img-responsive" src="<?=imageVerify(small_image($news['image']) );?>" alt="<?=$news['image']?>" />
											</div>
											<div class="catagory politics"><span><a href="#"><?=timeAgo($news['publish_up'])?></a></span></div>
									</div>
									<div class="post-content">
										<div class="entry-meta">
											<ul class="list-inline">
												<!-- <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li> -->
												<li class="views"><a href="#"><i class="fa fa-eye"></i><?=$news['hit']?></a></li>
												<!-- <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li> -->
											</ul>
										</div>
										<p class="entry-title">
											<a href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>"><?=$news[ language().'_title'];?></a>
										</p>
									</div>
								</div>
								</a>
							</div>
						<?php  endif ;?>
					<?php  endforeach ;?>

					</div>
				</div>
			</div><!--/.latest-news-wrapper-->

			<?php endforeach ;?>

	</div>

					<div class="col-md-3 col-sm-4">
						<div id="sitebar">




							<div class="widget">
								<div class="add">
									<!-- <a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add3.jpg" alt="" /></a> -->

									<div calendar class="calendar" id="calendar">
									<div class="calendar__picture">
											<!-- <h2 class="">18, Sunday</h2>
											<h3>November</h3> -->
											<div id="calendar"></div>
										</div>


									</div>
									<!-- CALENDAR -->

								</div>
							</div><!--/#widget-->

              <div class="widget">
                <div class="add">
                  <a href="https://www.instagram.com/ego_technologies/"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/gif2.gif" alt="" /></a>
                </div>
              </div><!--/#widget-->

							<div class="widget  ">
								<p class="section-title title">Ən çox oxunan xəbərlər!</p>

								<ul class="post-list  ">

								<?php $this->load->view(Svw.'partials/hitnews')?>

								</ul>
							</div><!--/#widget-->


              <?php $this->load->view(Svw.'partials/banner');?>


						</div><!--/#sitebar-->
					</div>
				</div>
			</div><!--/.section-->
		</div><!--/.container-->


	</div><!--/#main-wrapper-->

  <?php
  // @$cookie = $_COOKIE['birthday'];
  // if($cookie ==""){
  // $this->load->view(Svw.'partials/brith');
  // setcookie('birthday','dy7brith1qdayg&x6tr32&6dgeyw',time()+60*60*12);
  //  }

  ?>



	<?php $this->load->view(Svw.'layouts/footer');?>

	<?php $this->load->view(Svw.'layouts/foot');?>
 <!--
      <script type="text/javascript" src="<?=base_url('assets/site/')?>js/calendar.js"></script>  -->

<script>
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Br.', 'B.e.', 'Ç.a.', 'Ç.', 'C.a.', 'C.', 'Ş.']
    });
</script>
