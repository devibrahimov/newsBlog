<table class="table table-bordered">
  <tr>
    <th><i class="fa fa-power-off" style="color: green;" > </i></th>
    <th>Xəbər Şəkili</th>
    <th>Xəbər Başlıq</th>
    <th>Xəbər Kateqoriyası</th>
    <th>Yazar</th>
    <th>Paylaşım tarixi</th>
    <th>Əməliyyatlar</th>
  </tr>

    <?php foreach($news as $n):?>
  <tr>
  <td>
      <?php if($n['active']=='0'){echo '<i class="fa fa-power-off"> </i>';}?>
      <?php if($n['active']=='1'){echo '<i class="fa fa-power-off" style="color: red;"> </div>';}?>

  </td>
    <td><img src="<?=base_url('').small_image($n['image'])?>" width="100px"> </td>
    <td> <?=$n['az_title']?></td>
    <td> <?=$cat_name[$n['catid'] ]?></td>
    <td style="background:#c3c3c3;"><?=$user_name[$n['created_by'] ]?></td>
    <td> <div style="border-bottom:1px solid black;"><span style="color: blue; ">Xəbər yazılma vaxtı<br > <?=$n['created']?></span></div>  <span  style="color: blue;">Xəbər paylashilma vaxtı<br> <?=$n['publish_up']?></span> </td>

    <td>
    <a href="<?=site_url('Admincontroller/editpage/').$n['id'];?>"><span class="btn  bg-blue">Dəyiş</span></a>
     <a href="<?=site_url('Admin_news/totrash/').$n['id'];?>"><span class="btn  bg-red"><i class="fa fa-trash"></i></span></a>
    <?php if($this->session->admin['state'] ==='Admin' || $this->session->admin['state'] ==='Superuser'):?>
       <?php if($n['active']=='0'){?> <a href="<?=site_url('Admin_news/publish_news/').$n['id'];?>"><span class="btn  bg-green">Yayinla</span></a> <?php }?>

      <?php if($n['active']=='1'){?>  <a href="<?=site_url('Admin_news/unpublish/').$n['id'];?>"><span class="btn  bg-gray">Yayini durdur</span></a>  <?php }?>

   <?php endif;?>
    </td>
  </tr>
  <?php endforeach;?>

</table>
