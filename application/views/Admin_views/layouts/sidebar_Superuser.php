<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?=base_url('assets/admin/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?= $this->session->admin['name']?> </p>
      <!-- Status -->
      <a href="<?=site_url('');?>"><i class="fa fa-circle text-success"></i> <?= $this->session->admin['state']?> </a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <!-- Optionally, you can add icons to the links -->
    <li class="<?php if($type ==='1'){echo 'active';}?>"><a href="<?=site_url('admin/');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="<?php if($type ==='2'){echo 'active';}?>"><a href="<?=site_url('admin/categories');?>"><i class="fa fa-filter"></i> <span>Xəbər-Kategoriyaları</span></a></li>
    <li class="<?php if($type ==='8'){echo 'active';}?>"><a href="<?=site_url('admin/athome');?>"><i class="fa fa-cube"></i> <span>Ana səhifədə <br> Xəbər-Kategoriyaları</span></a></li>


    <li class="treeview <?php if($type === '3'){echo 'active menu-open';}?>">
      <a href="#"><i class="fa fa-newspaper-o"></i> <span>Xəbər</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu  "<?php if($type === '3'){echo 'style="display: block;"';}?> >
        <li  class=""><a href="<?=site_url('Admin/newspost');?>"><i class="fa fa-pencil"></i>Yeni Xəbər</a></li>
        <li><a href="<?=site_url('Admin/newslist');?>"><i class="fa fa-list"></i>Xəbərlər</a></li>
      </ul>
    </li>

    <!-- <li class="treeview">
      <a href="#"><i class="fa fa-shopping-cart"></i> <span>Mağaza</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu"<?php if($type === '6'){echo 'style="display: block;"';}?>>
        <li><a href="<?=site_url('');?>"><i class="fa fa-download"></i>Yeni Məhsul</a></li>
        <li><a href="<?=site_url('');?>"><i class="fa fa-cart-plus"></i>Məhsullar</a></li>
      </ul>
    </li> -->
    <li class="<?php if($type ==='abune'){echo 'active';}?>"><a href="<?=site_url('admin/chipSubscribes');?>"><i class="fa fa-child"></i> <span>Chip abuneleri</span></a></li>

    <li class="<?php if($type ==='addversting'){echo 'active';}?>"><a href="<?=site_url('admin/addControl');?>"><i class="fa fa-sliders"></i> <span>Reklamlarin idare edilmesi</span></a></li>

    <li class="<?php if($type ==='4'){echo 'active';}?>"><a href="<?=site_url('admin/users');?>"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li class="<?php if($type ==='5'){echo 'active';}?>"><a href="<?=site_url('admin/adminusers');?>"><i class="fa fa-diamond"></i> <span>Admin Users</span></a></li>
    <li class="<?php if($type ==='9'){echo 'active';}?>"><a href="<?=site_url('admin/festival');?>"><i class="fa fa-lemon-o"></i><span>Festival</span></a></li>
    <li class="<?php if($type ==='7'){echo 'active';} ?>"><a href="<?=site_url('admin/setting');?>"><i class="fa fa-wrench"></i> <span>Tənzimləmələr</span></a></li>
  </ul> <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>








  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$pageheader?>
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('');?>"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">

<?php flashread();?>
</div>
