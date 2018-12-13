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

	<div class="col-md-12 top-20 padding-0">
	                <div class="col-md-12">
	                  <div class="panel">
	                    <div class="panel-body">
	                      <div class="responsive-table">
	                      <table id="datatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
	                      <thead>
	                        <tr>
	                          <th>ID</th>
	                          <th>Price</th>
	                          <th>Value</th>
	                          <th>Code</th>
	                        </tr>
	                      </thead>
	                      <tbody>
													<?php foreach($voucher as $row): ?>
                            <?php if ($row->sold == 1): ?>
                            <tr>
                                <td><?= $row->voucher_id ?></td>
                                <td><?= 'Rp ' . number_format($row->price, 0, ',', '.') ?></td>
                                <td><?= $row->value ?></td>
                                <td><?= $row->code ?></td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
	                      </tbody>
	                        </table>
	                      </div>
	                  </div>
	                </div>
	              </div>
	              </div>

	<!-- /Page Content -->
</div>
<!-- end: Content -->

<script src="<?=base_url('assets')?>/js/plugins/jquery.datatables.min.js"></script>
<script src="<?=base_url('assets')?>/js/plugins/datatables.bootstrap.min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
      $('#voucher').addClass('active');
			$('#terjual').addClass('active');
			$('#datatables').DataTable({"ordering":false});
		});
</script>
