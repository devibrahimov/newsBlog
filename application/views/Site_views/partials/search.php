
            <form class="" action="<?=site_url('Searchresult')?>" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Axtar...">
              <span class="input-group-btn">
                <button class="btn btn-default "style="    background-color: #ed1c24;" type="submit"> <i class="fa fa-search"></i></button>
              </span>
              <?php csrfToken();?>
            </div><!-- /input-group -->
            </form>
