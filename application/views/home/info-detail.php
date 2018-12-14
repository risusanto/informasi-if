<!-- Main Content -->
<?php $id = $this->input->get('id'); ?>
<main class="col col-12">

  <div id="newsfeed-items-grid">
    <div class="ui-block">
					<!-- Post -->

					<article class="hentry post has-post-thumbnail">

						<div class="post__author author vcard inline-items">
							<img src="<?=base_url('assets/')?>img/author-page.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.html"><?=$post->username?></a>
								<div class="post__date">
									<time class="published" datetime="<?=$post->date?>">
										<?=$post->date?>
									</time>
								</div>
							</div>

						</div>

						<p><?=$post->isi?></p>

            <?php
              $files = $this->Download_m->get(['id_info' => $post->id_info]);
             ?>
             <?php if (count($files) > 0): ?>
               <strong>File(s):</strong>
               <ol>
                 <?php foreach ($files as $file): ?>
                   <li> <a href="<?=base_url('assets/content/uploads/'.$file->file)?>" download><?=$file->file?></a> </li>
                 <?php endforeach; ?>
               </ol>
               <br>
             <?php endif; ?>

						<div class="post-additional-info inline-items">


							<div class="comments-shared">
								<a href="<?=base_url('home/post-detail?id='.$post->id_info)?>" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
									<span><?=count($comments)?></span>
								</a>
							</div>


						</div>

					</article>
          <!-- comments -->
            <?php if (count($comments) > 0): ?>
              <ul class="comments-list">
                <?php foreach ($comments as $comment): ?>
                  <li class="comment-item">
        						<div class="post__author author vcard inline-items">
                      <?php
                        $role_temp = $this->User_m->get_row(['username' => $comment->username])->role;
                        if ($role_temp == 'mahasiswa' ) {
                          $author = $this->Mahasiswa_m->get_row(['username' => $comment->username]);
                        }
                        if ($role_temp == 'admin' ) {
                          $author = $this->Admin_m->get_row(['username' => $comment->username]);
                        }
                        if ($role_temp == 'dosen' ) {
                          $author = $this->Dosen_m->get_row(['username' => $comment->username]);
                        }
                       ?>
                      <?php if ($role_temp == 'mahasiswa'): ?>
          							<img src="https://akademik.unsri.ac.id/images/foto_mhs/<?=$author->angkatan.'/'.$author->username.'.jpg'?>" alt="author">
                      <?php endif; ?>
                      <?php if ($role_temp == 'admin'): ?>
          							<img alt="author" src="<?=base_url('assets/img/avatar1.jpg')?>" height="36" width="36" class="avatar">
                      <?php endif; ?>
                      <?php if ($role_temp == 'dosen'): ?>
          							<img alt="author" src="<?=base_url('assets/img/avatar12-sm.jpg')?>" height="36" width="36" class="avatar">
                      <?php endif; ?>
        							<div class="author-date">
        								<a class="h6 post__author-name fn" href="#"><?=$author->nama?></a>
        								<div class="post__date">
        									<time class="published">
                            <?=$comment->date?>
        									</time>
        								</div>
        							</div>

                      <?php if ($comment->username == $username): ?>
                        <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
          								<ul class="more-dropdown">
          									<li>
          										<a href="javascript:delete_data(<?=$comment->id_komentar?>)">Hapus Komentar</a>
          									</li>
          								</ul>
          							</div>
                      <?php endif; ?>

        						</div>

        						<p><?=$comment->isi_komentar?></p>
        					</li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <!-- end comments -->

          <?php if ($role != 'guest'): ?>
          <!-- Comment form -->
          <?=form_open('home/post-detail?id='.$id,['class' => 'comment-form inline-items'])?>
  					<div class="post__author author vcard inline-items">
              <?php if ($role == 'mahasiswa'): ?>
    						<img src="https://akademik.unsri.ac.id/images/foto_mhs/<?=$profil->angkatan.'/'.$profil->username.'.jpg'?>" alt="author">
              <?php endif; ?>

  						<div class="form-group with-icon-right ">
  							<textarea class="form-control" name="data"></textarea>
  							<div class="add-options-message">
  								<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
  									<svg class="olymp-camera-icon">
  										<use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
  									</svg>
  								</a>
  							</div>
  						</div>
  					</div>
            <input type="hidden" name="komentar" value="true">
  					<button type="submit" class="btn btn-md-2 btn-primary">Post</button>
				<?=form_close()?>
        <!-- end comment form -->
          <?php endif; ?>

					<!-- ... end Post -->
				</div>
  </div>
</main>

<!-- ... end Main Content -->

<script type="text/javascript">

function delete_data(id) {
      swal({
        title: 'Konfirmasi',
        text: 'Hapus Komentar?',
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
                url: "<?= base_url('home/hapus_komentar') ?>",
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
