<div class="searchNlogin">
  <ul>
    <li class="search-icon"><i class="fa fa-search"></i></li>
  <?php if(@$this->session->userdata['clientuser']){ ?>
    <li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->clientuser['name']?></a>
      <div class="dropdown-menu top-user-section">
      <div class="create-account">
          <a href="<?=site_url('site/register');?>">PROFİL</a>
        </div>
        <div class="create-account">
          <a href="<?=site_url('Site_request/logout');?>">Çıxış et</a>
        </div>

      </div>
    </li>
  <?php }else{?>
    <li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
      <div class="dropdown-menu top-user-section">
        <div class="top-user-form">
          <form id="top-login" method="post" role="form" action="<?=site_url('Site_request/login')?>" >
            <div class="input-group" id="top-login-username">
              <span class="input-group-addon"><img src="<?=base_url('assets/site/')?>images/others/user-icon.png" alt="User Qeydiyyati Chip.az" /></span>
              <input type="email" class="form-control" name="email" maxlength="30" placeholder="Email" required >
            </div>
            <div class="input-group" id="top-login-password">
              <span class="input-group-addon"><img src="<?=base_url('assets/site/')?>images/others/password-icon.png" alt="User Qeydiyyati Chip.az" /></span>
              <input type="password" class="form-control" name="password" minlength="6" maxlength="30" placeholder="password" required >
            </div>
            <div>
              <!-- <p class="reset-user">Forgot <a href="#">Password/Username?</a></p> -->
              <button class="btn btn-danger" type="submit">Login</button>
            </div>
            <?php csrfToken() ;//from tools_hepler ?>
          </form>
        </div>
        <div class="create-account">
          <a href="<?=site_url('site/register');?>">Qeydiyyatdan Keçin</a>
        </div>
        <div class="create-account">
          <!-- <div class="row">
          <a class="col-md-6   " href="<?=site_url('site/register');?>">Facebook</a>
          <a class="col-md-6  " href="<?=site_url('site/register');?>">Google</a>
          </div> -->

        </div>
      </div>
    </li>

    <?php }//end else?>
  </ul>
  <div class="search">
    <form role="form" method="get" action="<?=site_url('Searchresult')?>">
      <input type="text" class="search-form" autocomplete="on" name="searchword" placeholder="Yazdiktan sonra enter klikleyin">
      <?php $csrf = array( 'name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()  ); ?>
          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    </form>
  </div> <!--/.search-->
</div><!-- searchNlogin -->
