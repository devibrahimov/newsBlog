<?php  //print_r($homenews);die;?>
<?php $this->load->view(Svw.'layouts/head');?>
<link href="<?=base_url('assets/site/')?>css/calendar.css?v=1" rel="stylesheet">
<!-- <link rel="stylesheet" href="<?=base_url('assets/site/')?>css/jquery-ui-datepicker.min.css"> -->
 
 <?php $this->load->view(Svw.'layouts/header');?>

<?php //$this->lang->line('yazi');?>

<div id="main-slider" >
  	<?php foreach($slidernews as $news):?>

  <div class="post feature-post" style="background-image:url(<?=$news['image'];?>); background-size:cover;">
    <div class="post-content">
      <div class="catagory world"><a href="#"><?=$cat_name[$news['catid'] ]?></a></div>
      <h2 class="entry-title bg-dark">
        <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>"><?=$news['az_title']?></a>
      </h2>
    </div>
  </div><!--/post-->

	<?php endforeach;?>

</div><!-- #main-slider -->

    <div id="containerDiv" class="container">
			<div class="section">
				<div class="row">



			</div><!--/.section-->

			<script type="text/javascript" src="<?=base_url('assets/site/')?>js/weather.js"></script>
			<div class="section">
				<div class="latest-news-wrapper">
					<div id="latest-news">

					</div>
				</div><!--/.latest-news-wrapper-->
			</div><!--/.section-->



			<div class="section">
				<div class="row">

        <div class="col-md-3 col-sm-2">


          <div class="section video-section mt-20" style="margin-top:20px">
            <h4 class="section-title title">Chip Azərbaycan</h4>

          <div class="post feature-post">
            <div class="entry-header">
              <div class="entry-thumbnail" style=" height:360px;background: url('<?=base_url('assets/uploads/')?>chipjournal/chipyashil.jpg') no-repeat; background-size: cover;background-position: center center !important;">
                <!-- <img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/slider/2.jpg" alt="" /> -->
              </div>
              <div class="catagory world"><span><a  href="<?=site_url('chipabunelik');?>">CHİP Jurnalı Abunəlik</a></span></div>
            </div>
            <div class="post-content">
              <div class="entry-meta">
              </div>
              <!-- <h2 class="entry-title">
                <a href="<?=site_url('chipxeber/').$slideronenews['id'].'-'.$slideronenews[ language()."_slug"];?>"><?=$slideronenews['az_title']?></a>
              </h2> -->
            </div>
          </div><!--/post-->
        </div>

      
          <div class="section video-section mt-20 media-none" style="margin-top:30px">
            <h4 class="section-title title">Youtube video</h4>


            <div class="post video-post medium-post">
              <div class="entry-header">
                <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                  <iframe width="962" height="541" src="https://www.youtube.com/embed/ZwY6zW886lY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
              </div>
              <div class="post-content">

                <h5 class="entry-title">
                  <a>Azərbaycanda II Robot Olimpiadası (Açılış Mərasimi)</a>
                </h5>
              </div>
            </div><!--/post-->
              <div class="post video-post medium-post">
                <div class="entry-header">
                  <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                    <iframe width="962" height="541" src="https://www.youtube.com/embed/GmW7jOjqqDA"  height="100%" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                </div>
                <div class="post-content">

                  <h5 class="entry-title">
                    <a>Bakıda Hüsniyə Məhərrəmova (Əylənərək Öyrənmək Seminar)</a>
                  </h5>
                </div>
              </div><!--/post-->


              <div class="post video-post medium-post">
                <div class="entry-header">
                  <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                    <iframe width="962" height="541" src="https://www.youtube.com/embed/2r22QnseUkY"  height="100%" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="post-content">

                  <h5 class="entry-title">
                    <a>“Life Long Learning“ Forumu (Azərbaycan Bakı)</a>
                  </h5>
                </div>

              </div><!--/post-->


              <div class="post video-post medium-post">
                <div class="entry-header">
                  <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                    <iframe width="962" height="541" src="https://www.youtube.com/embed/F3HJf1jjIVE" frameborder="0" height="100%" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                </div>
                <div class="post-content">
                  <h5 class="entry-title">
                    <a> Bakıda Texnologiyalarının Tətbiqi və Tədrisi Mərkəzində (İT Karyera Seçimi Seminar)</a>
                  </h5>
                </div>
              </div><!--/post-->
          </div> <!-- /.video-section -->






                        <div class="section business-section">
          											<h5 class="section-title">Son Xəbərlər</h5>

                               	<?php foreach($slidernews as $new):?>
          											<div class="post medium-post" style="margin-top: 20px;">
                                  <div class="entry-header">
                											<a href="<?=site_url('chipxeber/').$new['id'].'-'.$new[ language()."_slug"];?>" class="entry-thumbnail height-200">
                												<img class="img-responsive w-100"style="height:180px;" src="<?=imageVerify(small_image($new['image']) );?>" alt="<?=$new['image']?>" />
                											</a>

                									</div>
          												<div class="post-content" >
          													<div class="entry-meta">
          														<ul class="list-inline">
          															<li class="publish-date world"><p><i class="fa fa-clock-o"></i> <?=timeAgo($new['publish_up']);?> </p></li>
          															<!-- <li class="views"><p><i class="fa fa-eye"></i><?=$new['hit']?></p></li> -->
          															<li class="loves"><a href="#" class="text-info"> <?=$cat_name[$new['catid'] ]?></a></li>
          														</ul>
          													</div>
          													<h6 class="entry-title">
          														<a href="<?=site_url('chipxeber/').$new['id'].'-'.$new[ language()."_slug"];?>"><?=$new['az_title']?></a>
          													</h6>
          												</div>
          											</div><!--/post-->
	                             <?php endforeach;?>

          										</div>

                              <div class="widget  ">

              <?php $this->load->view(Svw.'partials/recommendedtechnology')?>


              </div><!--/#widget-->

        </div>







      	<div class="col-md-6 ">
  
        <?php foreach($athomecategories as $row):?>
                  <div class="section lifestyle-section">
                    <h2 class="section-title">	<a href="<?=site_url('')?>category/<?=$row['id'].'-'.$row['az_slug']?>" class="section-title "> <?=$row['az_name']?> </a></h2>
										 
											<div class="row">
                      <?php  foreach($homenews as $news):?>
                      <?php if( $row['id'] == $news['catid']):?>
												<div class="col-md-6">
                        <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news["az_slug"];?>">
													<div class="post medium-post height-250"style="height:300px;">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive w-100" src="<?=imageVerify(small_image($news['image']) );?>" alt="<?=$news['az_title']?>" style="height:150px;"/>
															</div>
														</div>
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i>  <?=timeAgo($news['publish_up'])?>  </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
                              <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news["az_slug"];?>"><?=$news['az_title'];?></a>
															</h2>
														</div>
                          </div><!--/post-->
                          
                        </div>
                        <?php  endif ;?>
      				      	<?php  endforeach ;?>
                      </div> 
									</div><!--/.lifestyle -->
 
        <?php endforeach ;?>
        </div><!-- end col-md-6 --> 
<!-- ############################################################33 -->

<script>
 document.addEventListener('DomContentLoaded',init);

let mq = window.matchMedia( "(min-width: 750px)" );

if (mq.matches) {
    document.getElementById('containerDiv').className = 'container' ; 
    document.getElementById('main-slider').style = 'display:none;' ; 
     
} else{
    var a = document.getElementById('containerDiv').className = 'container-fluid' ; 
    
}
</script>




        



					<div class="col-md-3 col-sm-4" style="margin:40px 0 40px 0;">

            <?php $this->load->view(Svw.'partials/search')?>


            <h2 class="section-title title ">Günün Valyuta dəyəri</h2>
            <div class="featured-add">
              <div class="stock-exchange text-center">
                <div class="stock-exchange-zone">
                  <a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/gallery/stock.png" alt="Valyuta gostericileri" /></a>
                </div>

                <div class="stock-reports">
                  <div class="com-details">
                    <div class="row">
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>usd.png" width="25px"  alt="Azərbaycan valyuta göstəriciləri usd.png" ></div>
                    <div class="col-xs-8 com-name"> <?=$valyuta['usd']?> </div>
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" alt="Azərbaycan valyuta göstəriciləri aze.png" ></div>
                    </div>
                  </div>
                  <div class="com-details">
                    <div class="row">
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>eur.png" width="25px" alt="Azərbaycan valyuta göstəriciləri eur.png"  ></div>
                    <div class="col-xs-8 com-name"> <?=$valyuta['eur']?> </div>
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" alt="Azərbaycan valyuta göstəriciləri aze.png" ></div>
                    </div>
                  </div>
                  <div class="com-details">
                    <div class="row">
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>rub.png" width="25px"  alt="Azərbaycan valyuta göstəriciləri rub.png" ></div>
                    <div class="col-xs-8 com-name"> <?=$valyuta['rub']?> </div>
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" alt="Azərbaycan valyuta göstəriciləri aze.png" ></div>

                    </div>
                  </div>
                  <div class="com-details">
                    <div class="row">
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>try.png" width="25px" alt="Azərbaycan valyuta göstəriciləri try.png"  ></div>
                    <div class="col-xs-8 com-name"> <?=$valyuta['try']?> </div>
                    <div class="col-xs-2 com-name"><img src="<?=base_url('assets/site/flag/');?>aze.png" width="25px" alt="Azərbaycan valyuta göstəriciləri aze.png" ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 


              <h2 class="section-title title " style="margin-top:50px;">Hava Xəbərləri</h2>

            <div class="widget" id="weatherContainer" >

              <div class="wC">
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


						<div id="sitebar">
							<div class="widget">
								<div class="add">
									<!-- <a href="#"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/add3.jpg" alt="" /></a> -->

									<div calendar class="calendar" id="calendar">
									<div class="calendar__picture"> 
											<div id="calendar"></div>
										</div>
									</div>
									<!-- CALENDAR -->

								</div>
							</div><!--/#widget-->

              <div class="widget">
                <div class="add">
                  <a href="https://www.instagram.com/ego_technologies/"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/post/add/gif2.gif" alt="CP PLUS texnologiya" /></a>
                </div>
              </div><!--/#widget-->

							<div class="widget  ">

								<?php $this->load->view(Svw.'partials/hitnews')?>


							</div><!--/#widget-->


              <?php $this->load->view(Svw.'partials/banner');?>

              <div class="widget  ">

                <?php $this->load->view(Svw.'partials/recommendedhome')?>


              </div><!--/#widget-->

             
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
