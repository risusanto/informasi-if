
<link href="" rel="stylesheet">
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
                      <div class="panel-heading">
                          <a href="<?=base_url('admin/tambah-informasi')?>" class="btn btn-default">Tambah Berita <span class="fa fa-plus"></span></a>
                        </div>
	                    <div class="panel-body">
                        <div class="responsive-table">
                          <table  id="datatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Konten</th>
																<th>User</th>
                                <th width="40">Pilihan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach($posts as $row):?>
                              <tr>
                                <td><?=$i++?></td>
                                <td><?= substr(strip_tags($row->isi),0,200)?></td>
																<td><?=$row->username?></td>
                                <td width="100">
                                  <a href="<?=base_url('home/post-detail?id='.$row->id_info)?>" target="_blank" class="btn btn-primary">Preview <span class="fa fa-eye"></span></a>
                                  <a href="<?=base_url('admin/edit-informasi?id='.$row->id_info)?>" class="btn btn-success">Edit <span class="fa fa-pencil"></span></a>
                                  <button class="btn btn-danger" onclick="delete_data('<?=$row->id_info?>')">Delete <span class="fa fa-trash"></span></button>
																	<?php if ($row->pinned == 0): ?>
																		<button class="btn btn-default" onclick="pin('<?=$row->id_info?>')">Pin <span class="fa fa-heart"></span></button>
																	<?php endif; ?>
																	<?php if ($row->pinned == 1): ?>
																		<button class="btn btn-warning" onclick="unpin('<?=$row->id_info?>')">Un-Pin <span class="fa fa-heart"></span></button>
																	<?php endif; ?>
                                </td>
                              </tr>
                              <?php endforeach;?>
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
<script src="<?=base_url('assets/admin')?>/js/plugins/jquery.datatables.min.js"></script>
<script src="<?=base_url('assets/admin')?>/js/plugins/datatables.bootstrap.min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
      $('#berita').addClass('active');

			$('#datatables').DataTable({
				"scrollX": true,
				dom: 'Bfrtip',
				responsive: true
			});

    });



    function delete_data(id) {
          swal({
            title: 'Konfirmasi',
						text: 'Hapus Data?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
            })
            .then((result) => {
              if (result.value) {
                $.ajax({
                    url: "<?= base_url('admin/informasi') ?>",
                    type: 'POST',
                    data: {
                        ID : id,
                        delete : true
                    },
                    success: function() {
                      location.reload();
                    }
                });
              }
            });
    }

		function pin(id) {
          swal({
            title: 'Konfirmasi',
						text: 'Pin informasi ini?',
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
            })
            .then((result) => {
              if (result.value) {
                $.ajax({
                    url: "<?= base_url('admin/pin-post') ?>",
                    type: 'POST',
                    data: {
                        ID : id,
                        delete : true
                    },
                    success: function() {
                      location.reload();
                    }
                });
              }
            });
    }

		function unpin(id) {
          swal({
            title: 'Konfirmasi',
						text: 'Un-Pin informasi ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
            })
            .then((result) => {
              if (result.value) {
                $.ajax({
                    url: "<?= base_url('admin/unpin-post') ?>",
                    type: 'POST',
                    data: {
                        ID : id,
                        delete : true
                    },
                    success: function() {
                      location.reload();
                    }
                });
              }
            });
    }
</script>
