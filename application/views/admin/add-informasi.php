
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

    <?=form_open_multipart('admin/tambah-informasi')?>
        <div class="panel">
          <div class="panel-heading">
            <h4>Attachment</h4>
          </div>
	        <div class="panel-body">
           <div class="row">
              <div class="col-lg-12">
                <div class="input-group fileupload-v1">
                    <input type="file" name="attachment[]" multiple class="form-control-file"/>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
	        </div>
	      </div>

	      <div class="panel">
	        <div class="panel-body">
              <textarea id="text_data" name="data"></textarea>
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
</script>
