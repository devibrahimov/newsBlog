

<?php $this->load->view(Svw.'layouts/headNews');?>
<div id="fb-root"></div>
 <style >
     #mainmenu .sub-catagory ul{margin-top: -53px;}
  .author-profile{ background-color:#0000003b }

  .site-content .author-details a{color:red;}
  @media (max-width: 767px){
  .hitnews{ display: none !important; }
  .nomobile{ display: none !important; }
  .row {
      margin-right: 0px !important; 
      margin-left:  0px !important; 
}
 }
 .author-name{  padding-bottom: 20px; }
 .author-info img{  max-width: 80%; }
 
</style>
<?php $this->load->view(Svw.'layouts/header');?>

<div id="containerDiv" class="container">

  <div class="section">
    <div class="row">
      <div class="col-sm-3" style="margin-top:70px">
        	<?php $this->load->view(Svw.'partials/search')?>
        <div id="sitebar">

          <?php $this->load->view(Svw.'partials/banner');?>
 

          <div class="widget hitnews">

            <?php $this->load->view(Svw.'partials/hitnews')?>

          </div><!--/#widget-->

            <div class="widget nomobile">

                <?php $this->load->view(Svw.'partials/umumixeber')?>

            </div><!--/#widget-->


        </div><!--/#sitebar-->
      </div>
      <div class="col-sm-9">
        <div id="site-content" class="site-content">
          <div class="author-details">
            <div class="author-heading" style=" height:497px;background: url('<?php if( base_url('').$news['image']){echo base_url('').$news['image']; }else{echo base_url('').'assets/site/images/chipreklamveren.png';}?>') no-repeat;
                          background-size: cover;background-position: center center !important;">
              <div class="author-profile ">

                <div class="author-name">
                  <div class="entry-meta"> </div>
                  <h1>	<?=$news[ language()."_title"]?> </h1>
                  <style> ul.list-inline li{color:white !important;padding-top:10px;}  </style>
                  <ul class="list-inline">
                    <li class="publish-date "> <i class="fa fa-clock-o"></i> <?=timeAgo($news['publish_up'])?> </li>
                    <!-- <li class="views "> <i class="fa fa-eye"> </i> <?=$news['hit']?> </li> -->
                    <!-- <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li> -->
                  </ul>

                  <?php if(!isset($_COOKIE[$news['id']])){
                    updatehit($news['id'],$news['hit']+1);
                  }else{ } setcookie($news['id'], true, time() + 45); ?>

                </div>
                <div class="author-social">
                  <div id="fb-root"></div>
                  <?php $chiplink = site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];  ?>
                  <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?= $chiplink ?>&layout=button_count&size=small&appId=315252136026735&width=90&height=20" width="90" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
              </div>
            </div>
            <div class="author-info">
                    
              	<?= htmlspecialchars_decode ($news[ language()."_text"]) ?>
            </div>



                <span class="author-info"> © Materiallardan istifadə edərkən hiperlinklə istinad olunmalıdır</span>



          </div>

            <div class="section">
                <div class="latest-news-wrapper">
                    <?php $recommended = get_recommended_news();?>
                    <h1 class="section-title">Tövsiyə Edilən Xəbərlər</h1>
                    <div id="latest-news">
                        <?php foreach($recommended  as $news):?>
                        <div class="post medium-post">
                            <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news['az_slug']?>">
                            <div class="entry-header">
                                <div class="entry-thumbnail" style=" height:150px;background: url('<?php if( base_url('').$news['image']){echo base_url('').$news['image']; }else{echo base_url('').'assets/site/images/chipreklamveren.png';}?>') no-repeat;
                                        background-size: cover;background-position: center center !important;">


<!--                                    <img class="img-responsive" src="--><?//=imageVerify(small_image($news['image']));?><!--" alt="--><?//= $news['image']  ;?><!--" alt="" />-->
                                </div>
                                <div class="catagory politics"><span><a><?=$cat_name[$news['catid'] ]?></a></span></div>
                            </div>
                            </a>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?=timeAgo($news['publish_up'])?> </a></li>
                                        <!-- <li class="views"><a ><i class="fa fa-eye"></i><?=$news['hit']?></a></li> -->
<!--                                        <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>-->
                                    </ul>
                                </div>
                                <h2 class="entry-title" style=" height:90px;">
                                    <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news['az_slug']?>"><?= $news[ language().'_title'] ;?></a>
                                </h2>
                            </div>
                        </div><!--/post-->
                        <?php endforeach;?>
                    </div>
                </div><!--/.latest-news-wrapper-->
            </div><!--/.section recommended-->


            <div class="section">
                <div class="row">
                    <h1 class="section-title"> <?= $cat_name[$news["catid"]]?> </h1>
                    <?php $thiscatnews = getCategoryNews($news["catid"]) ?>
                    <?php foreach($thiscatnews as $news):?>
                    <div class="col-sm-12">
                        <div id="site-content" class="site-content">
                             <div class="section listing-news">
                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail" style=" height:253px;background: url('<?php if( base_url('').$news['image']){echo base_url('').$news['image']; }else{echo base_url('').'assets/site/images/chipreklamveren.png';}?>') no-repeat;
                                                background-size: cover;background-position: center center !important;">
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        
                                        <h2 class="entry-title">
                                            <a href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>"><?=$news["az_title"]?></a>
                                        </h2>
                                        <div class="entry-content" style="font-size: 12px">
<!--                                            <p>--><?//= htmlspecialchars_decode(substr($news["az_text"],0,200))?><!-- </p>-->
                                            <div class="entry-meta">
                                            <ul class="list-inline">
                                                <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?=timeAgo($news['publish_up'])?> </a></li>
                                              <!-- <li class="views"><a ><i class="fa fa-eye"></i><?=$news['hit']?></a></li> -->
                                               <li class="loves"><a href="#"><i class="fa fa-flag "></i><?=$cat_name[$news['catid'] ]?></a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div><!--/post-->

                            </div>
                        </div><!--/#site-content-->

                    </div><!--/.col-sm-12 -->
                    <?php endforeach;?>
                </div>
            </div><!--/.section this category news-->



        </div><!--/#site-content-->


<style media="screen">
  .w-80{width:80px;} .height-50{height: 50px;}
</style>


   <fb:comments width="700px"></fb:comments>

      <script>
        FB.Event.subscribe('comments.add', function(resp) {
          Log.info('Comment was added', resp);
        });
      </script>


<div id="fb-root"></div>




      </div><!--/.col-sm-9 -->


    </div>
  </div><!--/.section-->
</div><!--/.container-->

</div><!--/#main-wrapper-->

<script>
 document.addEventListener('DomContentLoaded',init);

let mq = window.matchMedia( "(min-width: 750px)" );

if (mq.matches) {
    document.getElementById('containerDiv').className = 'container' ; 
    console.log('1212');
} else{
    var a = document.getElementById('containerDiv').className = 'container-fluid' ; 
    console.log(a);
}
</script>
<?php $this->load->view(Svw.'layouts/footer');?>


<script type="text/javascript">
    window.fbAsyncInit = function() { FB.init({appId: '315252136026735', status: true, cookie: true, xfbml: true}); };
    (function() {
     var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/az_AZ/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>

	<?php $this->load->view(Svw.'layouts/foot');?>
