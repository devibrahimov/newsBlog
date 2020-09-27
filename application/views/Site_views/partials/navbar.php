
<?php $lang = $this->session->userdata('lang')?>

<style> .nav .medium-post a{color:#5a5a5a!important;font-size: 11px;font-family: Helvetica;}.nav .entry-title{font-size: 11px !important; font-weight: bold;} </style>
<nav id="mainmenu" class="navbar-right collapse navbar-collapse"> 

  <ul class="nav navbar-nav">

  <?php foreach($parentcats as $cat):?>
    <?php if( $cat['childcat']==1):?>
      <li class="technology dropdown mega-cat-dropdown">
      <a href="javascript:void(0);" class="dropdown-toggle  category"   data-catid="<?=$cat['id']?>" data-toggle="dropdown"><?=$cat['az_name']?></a>
      <div class="dropdown-menu mega-cat-menu">
        <div class="container">
          <div class="sub-catagory">
            <p class="section-title"><?=$cat['az_name']?><p>
            <ul class="list-inline">
            <?php $childcat=childcategory($cat['id']);?>

          <?php foreach($childcat as $cet): ?>
            <li><a class="category" data-catid="<?=$cat['id']?>" href="<?=site_url('')?>category/<?=$cet['id'].'-'.$cet['az_slug']?>"><?=$cet[$lang.'_name']?></a></li>
           <?php endforeach ; ?>
            </ul>
          </div>
           <div class="row">
        <?php  $menuNews = $this->Newsmodel->getMenuNews($childcat);
        foreach($menuNews as $news): ?>
        <div class="col-sm-2">
            <div class="post medium-post">
                <div class="entry-header">
                    <div class="entry-thumbnail">
                        <a  href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>">
                        <img class="img-responsive" src="<?=imageVerify(small_image($news['image']) );?>" alt="<?=$news['image']?>"style="width:100%; height:90px" alt="" />
                        </a>
                    </div>
                </div>
                <div class="post-content">
                    <div class="entry-meta">
                        <ul class="list-inline">
                            <li class="publish-date"><a  style="color:#9e0505 !important;"> <?=$cat_name[$news['catid']]?> </a></li>

                        </ul>
                    </div>
                    <a  href="<?=site_url('chipxeber/').$news['id'].'-'.$news[ language()."_slug"];?>">
                    <h2 class="entry-title">
                      <?=$news[ 'az_title'];?>
                    </h2></a>
                </div>
            </div>
        </div>
        <?php endforeach ; ?>

          </div>
        </div>
      </div>
    </li>
  <?php endif;?>

  <?php if( $cat['childcat']==0):?>
    <li class="sports"><a href="<?=site_url('')?>category/<?=$cat['id'].'-'.$cat['az_slug']?>"><?=$cat['az_name']?></a></li>
  <?php endif;?>

  <?php endforeach ; ?>
    <!-- <li class="sports"><a href="<?=site_url('site/chiptv');?>">CHIP TV</a></li>
    <li class="sports"><a href="<?=site_url('site/products');?>">Mağaza</a></li> -->


  </ul>
</nav>
