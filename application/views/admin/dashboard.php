<!-- start: Content -->
<div id="content">
		<div class="panel box-shadow-none content-header">
			<div class="panel-body">
				<div class="col-md-12">
					<h3 class="animated fadeInLeft"><?=$title?></h3>
					<p class="animated fadeInDown" style="line-height:.4;">
						<?=$message?>
					</p>
				</div>
			</div>
		</div>
	<!-- Page Content -->

	<div class="row col-md-12">

		<div class="col-md-4">
			<div class="panel box-v1">
				<div class="panel-heading bg-white border-none">
					<div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
						<h4 class="text-left">Total</h4>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 text-right">
						<h4>
				<span class="icon-user icons icon text-right"></span>
			</h4>
					</div>
				</div>
				<div class="panel-body text-center">
					<h1><?= number_format(10, 0, ',', '.') ?></h1>
					<p>Peserta Terdaftar</p>
					<hr />
				</div>
			</div>
		</div>

	<!-- /Page Content -->
</div>
<!-- end: Content -->

<script type="text/javascript">
		$(document).ready(function() {
      $('#home').addClass('active');
		});
</script>
