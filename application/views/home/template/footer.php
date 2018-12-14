</div>
</div>

<a class="back-to-top" href="#">
<img src="<?=base_url('assets/')?>svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

<?php if ($role == 'guest'): ?>
  <!-- Modal -->
  <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DaftarLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  				<?=form_open('login')?>
  				<div class="form-group row">
  			    <label for="nim" class="col-sm-2 col-form-label">Username</label>
  			    <div class="col-sm-10">
  			      <input type="text" class="form-control" name="username" id="nim">
  			    </div>
  			  </div>
          <div class="form-group row">
  			    <label for="nim" class="col-sm-2 col-form-label">Password</label>
  			    <div class="col-sm-10">
  			      <input type="password" class="form-control" name="password" id="nim">
  			    </div>
  			  </div>
          <input type="hidden" name="login" value="true">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Login</button>
  				<?=form_close()?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php
$auth_ganti = ['mahasiswa','dosen','admin'];
 ?>
<?php if (in_array($role,$auth_ganti)): ?>
  <!-- Modal -->
  <div class="modal fade" id="gantipw" tabindex="-1" role="dialog" aria-labelledby="gantipw" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DaftarLabel">Ganti Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  				<?=form_open('home/ganti-pw')?>
          <div class="form-group row">
  			    <label for="nim" class="col-sm-2 col-form-label">Password Lama</label>
  			    <div class="col-sm-10">
  			      <input type="password" class="form-control" name="password" id="nim">
  			    </div>
  			  </div>
          <div class="form-group row">
  			    <label for="nim" class="col-sm-2 col-form-label">Password Baru</label>
  			    <div class="col-sm-10">
  			      <input type="password" class="form-control" name="password_baru" id="nim">
  			    </div>
  			  </div>
          <div class="form-group row">
  			    <label for="nim" class="col-sm-2 col-form-label">Konfirmasi</label>
  			    <div class="col-sm-10">
  			      <input type="password" class="form-control" name="konfirmasi" id="nim">
  			    </div>
  			  </div>
          <input type="hidden" name="gantipw" value="true">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Login</button>
  				<?=form_close()?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<!-- Modal -->
<div class="modal fade" id="Daftar" tabindex="-1" role="dialog" aria-labelledby="DaftarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DaftarLabel">Formulir Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<?=form_open('daftar')?>
				<div class="form-group row">
			    <label for="nim" class="col-sm-2 col-form-label">ID</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="data" id="nim">
			    </div>
			  </div>
        <div class="form-group row">
			    <label for="nim" class="col-sm-2 col-form-label">Role</label>
			    <div class="col-sm-10">
            <select name="role" class="form-control form-control-lg">
              <option value="mahasiswa">Mahasiswa</option>
              <option value="dosen">Dosen</option>
            </select>
			    </div>
			  </div>
        <input type="hidden" name="daftar" value="true">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Daftar</button>
				<?=form_close()?>
      </div>
    </div>
  </div>
</div>

<!-- JS Scripts -->
<script src="<?=base_url('assets/')?>js/jquery.appear.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.mousewheel.js"></script>
<script src="<?=base_url('assets/')?>js/perfect-scrollbar.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.matchHeight.js"></script>
<script src="<?=base_url('assets/')?>js/svgxuse.js"></script>
<script src="<?=base_url('assets/')?>js/imagesloaded.pkgd.js"></script>
<script src="<?=base_url('assets/')?>js/Headroom.js"></script>
<script src="<?=base_url('assets/')?>js/velocity.js"></script>
<script src="<?=base_url('assets/')?>js/ScrollMagic.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.waypoints.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.countTo.js"></script>
<script src="<?=base_url('assets/')?>js/popper.min.js"></script>
<script src="<?=base_url('assets/')?>js/material.min.js"></script>
<script src="<?=base_url('assets/')?>js/bootstrap-select.js"></script>
<script src="<?=base_url('assets/')?>js/smooth-scroll.js"></script>
<script src="<?=base_url('assets/')?>js/selectize.js"></script>
<script src="<?=base_url('assets/')?>js/swiper.jquery.js"></script>
<script src="<?=base_url('assets/')?>js/moment.js"></script>
<script src="<?=base_url('assets/')?>js/daterangepicker.js"></script>
<script src="<?=base_url('assets/')?>js/simplecalendar.js"></script>
<script src="<?=base_url('assets/')?>js/fullcalendar.js"></script>
<script src="<?=base_url('assets/')?>js/isotope.pkgd.js"></script>
<script src="<?=base_url('assets/')?>js/ajax-pagination.js"></script>
<script src="<?=base_url('assets/')?>js/Chart.js"></script>
<script src="<?=base_url('assets/')?>js/chartjs-plugin-deferred.js"></script>
<script src="<?=base_url('assets/')?>js/circle-progress.js"></script>
<script src="<?=base_url('assets/')?>js/loader.js"></script>
<script src="<?=base_url('assets/')?>js/run-chart.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.magnific-popup.js"></script>
<script src="<?=base_url('assets/')?>js/jquery.gifplayer.js"></script>
<script src="<?=base_url('assets/')?>js/mediaelement-and-player.js"></script>
<script src="<?=base_url('assets/')?>js/mediaelement-playlist-plugin.min.js"></script>

<script src="<?=base_url('assets/')?>js/base-init.js"></script>
<script defer src="<?=base_url('assets/')?>fonts/fontawesome-all.js"></script>

<script src="<?=base_url('assets/')?>Bootstrap/dist/js/bootstrap.bundle.js"></script>
<script type="text/javascript">
    <?= $this->session->flashdata('msg') ?>
</script>
</body>
</html>
