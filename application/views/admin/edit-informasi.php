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
	<?php $id = $this->input->get('id'); ?>
	<div class="col-md-12 top-20 padding-0">
	  <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Attachment <span class="fa fa-plus"></span></button>
          </div>
	        <div class="panel-body">
           <div class="row">
              <div class="col-md-6">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>File</th>
											<th>Pilihan</th>
										</tr>
									</thead>
									<tbody>
										<?php $i =1;  foreach ($files as $file): ?>
											<tr>
												<td><?=$i++?></td>
												<td><?=$file->file?></td>
												<td>
													<button class="btn btn-danger" onclick="delete_data('<?=$file->id_download?>')">Delete <span class="fa fa-trash"></span></button>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
	        </div>
	      </div>


	<?=form_open('admin/edit-informasi?id='.$id)?>
	      <div class="panel">
	        <div class="panel-body">
              <textarea id="text_data" name="data"><?=$data->isi?></textarea>
              <br>
              <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
	        </div>
	      </div>
    <?=form_close()?>

	  </div>
	</div>

	<!-- /Page Content -->
</div>
<!-- end: Content -->

<!-- <script src="<?=base_url('assets')?>/js/plugins/jquery.datatables.min.js"></script>
<script src="<?=base_url('assets')?>/js/plugins/datatables.bootstrap.min.js"></script> -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zzptnjg2wcdjviwp3zqxeb5p653l58rk2bcucxfac0qd9ecx"></script>
<script type="text/javascript">

		$(document).ready(function() {
      $('#berita').addClass('active');

			tinymce.init({
            selector: "#text_data",
            plugins: [
              "advlist autolink lists link image charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars code fullscreen",
              "insertdatetime nonbreaking save table contextmenu directionality",
              "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
            height: 600,
            // without images_upload_url set, Upload tab won't show up
            images_upload_url: '<?=base_url('admin/upload-tinymce')?>',
            relative_urls : false,
            remove_script_host : false,
            document_base_url : "<?=base_url()?>",
            convert_urls : true,

            // override default upload handler to simulate successful upload
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '<?=base_url('admin/upload-tinymce')?>');

                xhr.onload = function() {
                    var json;

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    success(json.location);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            },
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
                    url: "<?= base_url('admin/edit-informasi?id='.$id) ?>",
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Attachment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<?=form_open_multipart('admin/edit-informasi?id='.$id)?>
				<div class="form-group">
					<input type="file" name="attachment[]" class="form-control" multiple>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
				<?=form_close()?>
      </div>
    </div>
  </div>
</div>
