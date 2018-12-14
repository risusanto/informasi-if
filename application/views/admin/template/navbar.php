      <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand">
                 <b>Dashboard</b>
                </a>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?=$profil->nama?></span></li>
                  <li class="dropdown avatar-dropdown">
                    <?php if ($role == 'admin'): ?>
                      <img src="<?=base_url('assets/img/avatar1.jpg')?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                    <?php endif; ?>
                    <?php if ($role == 'dosen'): ?>
                      <img src="<?=base_url('assets/img/avatar12-sm.jpg')?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                    <?php endif; ?>
                   <ul class="dropdown-menu user-dropdown">
                     <!-- <li><a href="#"><span class="fa fa-cogs"></span> Setting</a></li> -->
                     <li><a href="<?=base_url('logout')?>"><span class="fa fa-power-off"></span> Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
