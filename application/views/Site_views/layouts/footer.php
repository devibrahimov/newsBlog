
	<footer id="footer">
		<div class="footer-top">
			<div class="container text-center">
				<div class="logo-icon"><img class="img-responsive" src="<?=base_url('assets/site/')?>images/presets/preset1/logo-icon.png" alt="logo Azerbaijan chip.az" /></div>
			</div>
		</div>
		<div class="footer-menu">
			<div class="container">
				<ul class="nav navbar-nav">
					<li><a href="<?=site_url('');?>">ANA SƏHİFƏ</a></li>
					<li><a href="<?=site_url('haqqimizda');?>">HAQQIMIZDA</a></li>
					<!-- <li><a href="<?=site_url('');?>">Məhsullar</a></li>-->
					<li><a href="<?=site_url('chipabunelik');?>">CHİP Abunə</a></li>
					<li><a href="<?=site_url('elaqe');?>">BİZİMLƏ Əlaqə</a></li>
				</ul>
			</div>
		</div>

		<div class="bottom-widgets">
			<div class="container">
				<!-- <div class="col-sm-2">
					<div class="widget"> 
						<ul>
						<?php foreach($parentcats as $cat):?>
							<li><a> <?=$cat['az_name']?> </a> </li>  
						<?php endforeach;?>
						</ul>
 
					</div>
				</div> -->
				<div class="col-sm-4">
						<div class="widget"> 
							<p><a href="<?=site_url('haqqimizda')?>">CHİP.AZ</a> Azərbaycanda və dünyada <a href="<?=site_url('category/156-texnologiya')?>">texnologiya</a>, sosial media, elektron ticarət, rəqəmsal marketinq və startap 
								sahələrində baş verən ən son yenilikləri doğma dildə öz istifadəçi kütləsinə çatdıran yerli informasiya saytıdır. <br/>
								&nbsp;&nbsp;Chip.az saytı xəbərlər vasitəsi ilə insanları marifləndirmək eyni zamnada Azərbaycanda ehtiyac duyulan Texnologiya sahəsinin
								 inkişafında gedən yenilkilərdən öz oxucu kütləsini xəbərdar etməkdir.</p>
								 <p>Aşsağıdakı sosial şəbəkələrdən də bizi izləyə bilərsiniz</p>
							<div class="widget"> 
								<ul>
									<li style="float:left;margin-left:10px;"><a href="<?=$contact['facebook']?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
									<li style="float:left;margin-left:10px;"><a href="<?=$contact['instagram']?>" target="_blank"><i class="fa fa-instagram"></i> İnstagram</a></li>
									<li style="float:left;margin-left:10px;"><a href="<?=$contact['youtube']?>" target="_blank"><i class="fa fa-youtube"></i> Youtube</a> </li>
								</ul>
							</div>
						</div>
					</div>
				<!-- <div class="col-sm-2">
					<div class="widget"> 
						<ul>
						<li><a href="<?=$contact['facebook']?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="<?=$contact['instagram']?>" target="_blank"><i class="fa fa-instagram"></i> İnstagram</a></li>
							<li><a href="<?=$contact['youtube']?>" target="_blank"><i class="fa fa-youtube"></i> Youtube</a> </li>
						</ul>
					</div>
				</div> -->
				<div class="col-sm-4">
					<div class="widget">  
							<ul>
								<?php foreach($footer_news as $news):?>
								<li class="imgli"><a href="<?=site_url('chipxeber/').$news['id'].'-'.$news["az_slug"];?>" ><img   class="img-responsive" src="<?=imageVerify(small_image($news['image']) );?>" alt="<?=$news['az_title']?>"style="width:100%;height:55px" /></a></li>
								<?php endforeach;?>
							 
							</ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-2">
					<div class="widget"> 
				
						<ul>
							
							<li> <a href="<?=site_url('chipabunelik');?>"  >
							<img class="img-responsive" src="<?=base_url('assets/uploads/')?>chipjournal/chipyashil.jpg" alt="Chip Azərbaycan texnoloji xəbər jurnalı" />
							</a> </li> 
							
						</ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-2">
					<div class="widget"> 
						<ul>
							
							<li> <a href="<?=site_url('chipabunelik');?>" >
							<img class="img-responsive" src="<?=base_url('assets/uploads/')?>chipjournal/chipgoy.png" alt="Chip Azərbaycan texnoloji xəbər jurnalı" />
							</a> </li> 
							
						</ul>
					</div>
				</div>
			</div>
		</div>




	  
		<div class="footer-bottom">
			<div class="container text-center">
				<p><a href="#">Chip.az </a>&copy; 2018 </p>
			</div>
		</div>
	</footer>
