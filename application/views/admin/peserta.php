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

	<?php 
		$type_id = $this->uri->segment(3);
	?>

	<div class="col-md-12 top-20 padding-0">
	                <div class="col-md-12">
	                  <div class="panel">
	                    <div class="panel-heading">

											</div>
	                    <div class="panel-body">
	                      <div class="responsive-table">
	                      <table id="datatables" class="table table-bordered table-striped display nowrap" width="100%" cellspacing="0">
	                      <thead>
							<tr>
								<th nowrap>No.</th>
								<th nowrap>Status</th>
								<th nowrap>Whatsapp</th>
								<th nowrap>Username</th>
								<th nowrap>Nama Lengkap</th>
								<th nowrap>Nama Panggilan</th>
								<th nowrap>Tempat & Tanggal Lahir</th>
								<th nowrap>Jenis Kelamin</th>
								<th nowrap>Agama</th>
								<th nowrap>Alamat</th>
								<th nowrap>No. Telepon</th>
								<th nowrap>Email</th>
								<th nowrap>Tinggi Badan / Berat Badan</th>
								<th nowrap>Universitas</th>
								<th nowrap>Jurusan</th>
								<th nowrap>Semester</th>
								<th nowrap>IPK</th>
								<th nowrap>Hobi</th>
								<th nowrap>Prestasi</th>
								<th nowrap>Bakat</th>
								<th nowrap>Riwayat Penyakit</th>
								<th nowrap>Motivasi Mengikuti BGK 18</th>
								<th nowrap>Pendapat Mengenai BGK 18</th>
								<th nowrap>Nama Ayah</th>
								<th nowrap>Nama Ibu</th>
								<th nowrap>Pekerjaan Orang Tua</th>
								<th nowrap>Telepon Orang Tua</th>
								<th nowrap>Orang Terdekat</th>
								<th nowrap>Telepon Orang Terdekat</th>
								<th nowrap>KTM</th>
								<th nowrap>KHS</th>
								<th nowrap>Foto Close Up</th>
								<th nowrap>Foto Seluruh Badan</th>
								<th nowrap>Bukti Pembayaran</th>
								<th nowrap>Aksi</th>
							</tr>
	                      </thead>
	                      <tbody>
							<?php $i = 0; foreach($peserta as $row): ?>
							<?php $file = $this->Files_m->get_row(['id_peserta' => $row->no_peserta]);?>
							<tr>
								<td nowrap><?= ++$i ?></td>
								<td nowrap>
									<?php if ($row->status == 0): ?>
										<button class="btn btn-danger" onclick="verifikasi(this, <?= $row->no_peserta ?>, '<?= $row->email ?>');"><i class="fa fa-close"></i> Belum Terverifikasi</button>
									<?php else: ?>
										<button class="btn btn-success" onclick="verifikasi(this, <?= $row->no_peserta ?>, '<?= $row->email ?>');"><i class="fa fa-check"></i> Terverifikasi</button>
									<?php endif; ?>
								</td>
								<td nowrap>
									<a href="https://api.whatsapp.com/send?phone=<?= $row->telepon[0] == 0 ? '62' . substr($row->telepon, 1) : $row->telepon ?>&text=&source=&data=#" class="btn btn-success" target="_blank"><i class="fa fa-whatsapp"></i> Chat <?=$row->telepon?></a>
								</td>
								<td nowrap><?=$row->username?></td>
								<td nowrap><?=$row->nama_lengkap?></td>
								<td nowrap><?=$row->nama_panggilan?></td>
								<td nowrap><?=$row->ttl?></td>
								<td nowrap><?=$row->jenis_kelamin?></td>
								<td nowrap><?=$row->agama?></td>
								<td nowrap><?=$row->alamat?></td>
								<td nowrap><?=$row->telepon?></td>
								<td nowrap><?=$row->email?></td>
								<td nowrap><?=$row->tinggi?> / <?=$row->berat?></td>
								<td nowrap><?=$row->universitas?></td>
								<td nowrap><?=$row->jurusan?></td>
								<td nowrap><?=$row->semester?></td>
								<td nowrap><?=$row->ipk?></td>
								<td nowrap><?=$row->hobi?></td>
								<td nowrap><?=$row->prestasi?></td>
								<td nowrap><?=$row->bakat?></td>
								<td nowrap><?=$row->riwayat_penyakit?></td>
								<td nowrap><?=$row->motivasi?></td>
								<td nowrap><?=$row->pendapat?></td>
								<td nowrap><?=$row->nama_ayah?></td>
								<td nowrap><?=$row->nama_ibu?></td>
								<td nowrap><?=$row->pekerjaan_ortu?></td>
								<td nowrap><?=$row->telepon_ortu?></td>
								<td nowrap><?=$row->nama_org_terdekat?></td>
								<td nowrap><?=$row->telepon_org_terdekat?></td>
								<td nowrap><a href="<?=$file_url.'ktm/'?><?=$file->ktm?>" target="_blank" rel="noopener noreferrer"><?= !empty($file->ktm) ? $file_url.'ktm/'. $file->ktm : '-' ?></a></td>
								<td nowrap><a href="<?=$file_url.'khs/'?><?=$file->khs?>" target="_blank" rel="noopener noreferrer"><?= !empty($file->khs) ? $file_url.'khs/' . $file->khs : '-' ?></a></td>
								<td nowrap><a href="<?=$file_url.'foto_closeup/'?><?=$file->foto_closeup?>" target="_blank" rel="noopener noreferrer"><?=  !empty($file->foto_closeup) ? $file_url.'foto_closeup/' . $file->foto_closeup : '-' ?></a></td>
								<td nowrap><a href="<?=$file_url.'foto_seluruh_badan/'?><?=$file->foto_seluruh_badan?>" target="_blank" rel="noopener noreferrer"><?= !empty($file->foto_seluruh_badan) ? $file_url.'foto_seluruh_badan/' . $file->foto_seluruh_badan : '-' ?></a></td>
								<td nowrap><a href="<?=$file_url.'bukti_pembayaran/'?><?=$file->bukti_pembayaran?>" target="_blank" rel="noopener noreferrer"><?= !empty($file->bukti_pembayaran) ? $file_url.'bukti_pembayaran/' . $file->bukti_pembayaran : '-'?></a></td>
								<td nowrap><button class="btn btn-danger" onclick="delete_peserta(<?=$row->no_peserta?>)"><i class="fa fa-trash"></i></button></td>
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
	function verifikasi(obj, no_peserta, email) {
		$.ajax({
			url: '<?= base_url('admin/peserta') ?>',
			type: 'POST',
			data: {
				verify: true,
				no_peserta: no_peserta,
				email: email
			},
			success: function(response) {
				console.log(response);
				if (response == 'unverified') {
					$(obj).removeClass('btn-success').addClass('btn-danger').html('<i class="fa fa-close"></i> Belum terverifikasi');
				} else {
					$(obj).removeClass('btn-danger').addClass('btn-success').html('<i class="fa fa-check"></i> Terverifikasi');
				}
			},
			error: function(err) { console.log(err); }
		});
	}

		$(document).ready(function() {
      $('#peserta').addClass('active');
			$('#datatables').DataTable({
				"scrollX": true,
				"ordering": false,
				dom: 'Bfrtip',
				responsive: true,
        buttons: [
          'excel'
        ]
			});
		});

		function delete_peserta(id) {
          swal({
            title: 'Konfirmasi',
						text: 'Hapus Peserta?',
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
                    url: "<?= base_url('admin/peserta') ?>",
                    type: 'GET',
                    data: {
                        no_peserta: id,
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
