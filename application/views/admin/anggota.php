
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
                          <a href="<?=base_url('admin/tambah-anggota')?>" class="btn btn-default">Tambah <span class="fa fa-plus"></span></a>
                        </div>
	                    <div class="panel-body">
                        <div class="responsive-table">
                          <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Pilihan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach($data as $row):?>
                              <tr>
                                <td><?=$i++?></td>
                                <td><?=$row->post_title?></td>
                                <td>
                                  <a href="<?=$row->guid?>" target="_blank" class="btn btn-primary">Preview <span class="fa fa-eye"></span></a>
                                  <a href="<?=base_url('admin/edit_post?id='.$row->ID.'&cat=anggota')?>" class="btn btn-success">Edit <span class="fa fa-pencil"></span></a>
                                  <button class="btn btn-danger" onclick="delete_data('<?=$row->ID?>')">Delete <span class="fa fa-trash"></span></button>
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

<script type="text/javascript">
		$(document).ready(function() {
      $('#anggota').addClass('active');
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
                    url: "<?= base_url('admin/delete-post') ?>",
                    type: 'GET',
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

