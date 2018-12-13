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
	                          <th>Title</th>    
	                          <th>Start</th>
							  <th>End</th>
                              <th>Option</th>
	                        </tr>
	                      </thead>
	                      <tbody>
						<?php foreach($polls as $row): ?>
                            <tr>
                                <td><?=$row->poll_id?></td>
                                <td><?= $row->title ?></td>
                                <td><?= $row->started_at ?></td>
                                <td><?= $row->ended_at ?></td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-user"></i></button>
                                    <button class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
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
