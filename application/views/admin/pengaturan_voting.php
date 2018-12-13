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
    <div class="col-md-12">
    <div class="panel">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <?= form_open_multipart('admin/pengaturan-voting') ?>
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" class="form-control" name="label">
                            </div>
                            <?php foreach ($option_details as $details): ?>
                                <?php if ($details->data_type == 'enum'): ?>
                                <div class="form-group">
                                    <label><?= $details->label ?></label>
                                    <select class="form-control" name="<?= $details->name ?>">
                                        <option><?= $details->label ?></option>
                                        <?php  
                                            $option_values = json_decode($details->option_values);
                                            foreach ($option_values as $key => $value):
                                        ?>
                                        <option value="<?= $key ?>"><?= $value ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <?php elseif ($details->data_type == 'file'): ?>
                                <div class="form-group">
                                    <?php $option = json_decode($details->option_values); ?>
                                    <label><?= $details->label ?></label> <i><small>(Max: <?= $option->max_size ?>KB, Format: <?= $option->format ?>)</small></i>
                                    <input type="<?= $details->data_type ?>" name="<?= $details->name ?>" class="form-control" accept="<?= $option->accept ?>">
                                </div>
                                <?php elseif ($details->data_type == 'multiple_files'): ?>
                                <div class="form-group">
                                    <?php $option = json_decode($details->option_values); ?>
                                    <label><?= $details->label ?></label> <i><small>(Max: <?= $option->max_size ?>KB, Format: <?= $option->format ?>, dapat lebih dari satu file)</small></i>
                                    <input type="file" multiple name="<?= $details->name ?>[]" class="form-control" accept="<?= $option->accept ?>">
                                </div>
                                <?php else: ?>
                                <div class="form-group">
                                    <label><?= $details->label ?></label>
                                    <input class="form-control" type="<?= $details->data_type ?>" name="<?= $details->name ?>">
                                </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <button class="btn btn-success" type="submit" name="add" value="Add"><i class="fa fa-plus"></i> Add</button>
                        <?= form_close() ?>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-primary">
                            <h4><i class="glyphicon glyphicon-info"></i> Petunjuk</h4>
                            <ol>
                                <li>
                                    <i>Label</i> biasanya berupa nama panggilan singkat yang akan ditampilkan pada sistem E-Voting
                                </li>
                                <li>
                                    Data lainnya biasanya berupa biodata
                                </li>
                                <li>
                                    Ketika terdapat kolom foto yang menyatakan <i>dapat lebih dari satu file</i>, maka anda dapat memilih lebih dari satu file untuk di-<i>upload</i>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <a href="<?= base_url('admin/sinkronisasi_data') ?>" class="btn btn-primary btn-lg"><i class="fa fa-refresh"></i> Sinkron Data</a><hr> -->
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Label</th>
                                    <th style="text-align: center;">Details</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($poll_option as $opt): ?>
                                <tr>
                                    <td><?= $opt->label ?></td>
                                    <td><?= $opt->details ?></td>
                                    <td width="13%">
                                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs" onclick="getOption(<?= $opt->option_id ?>);"><i class="fa fa-edit"></i> Edit</button>
                                        <button onclick="deleteOption(<?= $opt->option_id ?>);" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <?= form_open_multipart('admin/pengaturan-voting') ?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Option</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="option_id" id="edit_option_id">
        <div class="form-group">
            <label>Label</label>
            <input type="text" class="form-control" id="edit_label" name="label">
        </div>
        <?php foreach ($option_details as $details): ?>
            <?php if ($details->data_type == 'enum'): ?>
            <div class="form-group">
                <label><?= $details->label ?></label>
                <div id="edit_<?= $details->name ?>"></div>
            </div>
            <?php elseif ($details->data_type == 'file'): ?>
            <div class="form-group">
                <div id="edit_<?= $details->name ?>"></div>
                <?php $option = json_decode($details->option_values); ?>
                <label><?= $details->label ?></label> <i><small>(Max: <?= $option->max_size ?>KB, Format: <?= $option->format ?>)</small></i>
                <input type="<?= $details->data_type ?>" name="<?= $details->name ?>" class="form-control" accept="<?= $option->accept ?>">
            </div>
            <?php else: ?>
            <div class="form-group">
                <label><?= $details->label ?></label>
                <input class="form-control" type="<?= $details->data_type ?>" id="edit_<?= $details->name ?>" name="<?= $details->name ?>">
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="submit" name="edit" value="Edit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <?= form_close() ?>
    </div>

  </div>
</div>

<script type="text/javascript">
		$(document).ready(function() {
            $('#pengaturan_voting').addClass('active');
		});
    
        function deleteOption(option_id) {
          swal({
            title: 'Hapus',
			text: 'Apakah anda yakin ingin menghapus data ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
            })
            .then((result) => {
              if (result.value) {
                $.post('<?= base_url('admin/pengaturan-voting') ?>', {delete: true, option_id: option_id, '<?= $this->security->get_csrf_token_name() ?>': '<?= $this->security->get_csrf_hash() ?>'})
                .done(function(response) {
                    location.reload();
                });
              }
            });
        }

    function getOption(option_id) {
        $.get('<?= base_url('admin/pengaturan-voting?get=true&option_id=') ?>' + option_id, function(response) {
            var json = $.parseJSON(response);
            for (var key in json)
            {
                $('#edit_' + key).val(json[key]);
            }
            <?php foreach ($option_details as $details): ?>
                <?php if ($details->data_type == 'enum'): ?>
                    $('#edit_<?= $details->name ?>').html(json['<?= $details->name ?>']);
                <?php elseif ($details->data_type == 'file'): ?>
                    $('#edit_<?= $details->name ?>').html('<img src="<?= base_url('assets/images/pudinglab-' . $poll_id . '/') ?>' + option_id + '-label.jpg" width="200" height="200" onerror="this.src=\'<?= base_url('assets/images/200x200.png') ?>\'">');
                <?php endif; ?>
            <?php endforeach; ?>
            $('#edit_option_id').val(option_id);
        });
    }
</script>