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
                    <?= form_open('admin/voucher-generator', ['id' => 'generator-form', 'onsubmit' => 'return false;']) ?>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control" required name="type_id" id="type_id">
                                        <option>Price</option>
                                        <?php foreach ($voucher_type as $row): ?>
                                            <option value="<?= $row->type_id ?>"><?= 'Rp ' . number_format($row->price, 0, ',', '.') ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" min="0" required name="amount" id="amount" class="form-control" placeholder="Amount">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" onclick="generates();" name="generate" value="Generate" class="btn btn-primary">
                            </div>
                        </div>     
                    <?= form_close() ?>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?= base_url('admin/export-voucher') ?>" class="btn btn-success">Export to excel</a>
                        </div>
                    </div>
                    <table class="table" id="generated-voucher"></table>
                </div>
            </div>
        </div>
	<!-- /Page Content -->
</div>
<!-- end: Content -->

<script type="text/javascript">
		$(document).ready(function() {
            $('#voucher').addClass('active');
            $('#voucher_gen').addClass('active');
		});

        function generates() {
            $.ajax({
                url: '<?= base_url('admin/voucher-generator') ?>',
                type: 'POST',
                data: {
                    generate: true,
                    type_id: $('#type_id').val(),
                    amount: $('#amount').val(),
                    '<?= $this->security->get_csrf_token_name() ?>': '<?= $this->security->get_csrf_hash() ?>'
                },
                success: function(response) {
                    var json = $.parseJSON(response);
                    if (json.error)
                    {
                        alert('ERROR #' + json.error_status + ': ' + json.error_msg);
                    }
                    else
                    {
                        var html = '<thead>' +
                            '<tr>' +
                                '<th>ID Voucher</th>' +
                                '<th>Code</th>' +
                            '</tr>' +
                        '</thead>';

                        html += '<tbody>';
                        for (var i = 0; i < json.data.length; i++) {
                            html += '<tr>';
                            html += '<td>' + json.data[i].voucher_id + '</td>';
                            html += '<td>' + json.data[i].code + '</td>';
                            html += '</tr>';
                        }
                        html += '</tbody>';

                        $('#generated-voucher').html(html);
                    }
                },
                error: function(e) {
                    console.log(e.responseText);
                }
            });

            return false;
        }
</script>