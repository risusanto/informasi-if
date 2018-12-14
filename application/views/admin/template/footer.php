</div>

<!-- start: Mobile -->
<div id="mimin-mobile" class="reverse">
  <div class="mimin-mobile-menu-list">
      <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
          <ul class="nav nav-list">
            <li id="home" class="ripple"><a href="<?=base_url('admin')?>"><span class="fa fa-home"></span>Dashboard</a></li>
            <li id="berita" class="ripple"><a href="<?=base_url('admin/informasi')?>"><span class="fa fa-clipboard"></span>Berita</a></li>
          </ul>
      </div>
  </div>
</div>
<button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
  <span class="fa fa-bars"></span>
</button>
 <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="<?=base_url('assets/admin')?>/js/jquery.ui.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="<?=base_url('assets/admin')?>/js/plugins/moment.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/plugins/flot/jquery.flot.navigate.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/plugins/flot/jquery.flot.stack.min.js"></script>

<script src="<?=base_url('assets/admin')?>/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="<?=base_url('assets/admin')?>/js/main.js"></script>
<script type="text/javascript">
    <?= $this->session->flashdata('msg') ?>
</script>
<!-- end: Javascript -->
</body>
</html>
