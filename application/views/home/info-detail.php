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

							<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
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
									<span>16</span>
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
        							<img src="<?=base_url('assets/')?>img/avatar10-sm.jpg" alt="author">

        							<div class="author-date">
        								<a class="h6 post__author-name fn" href="#"><?=$comment->username?></a>
        								<div class="post__date">
        									<time class="published">
                            <?=$comment->date?>
        									</time>
        								</div>
        							</div>

        							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

        						</div>

        						<p><?=$comment->isi_komentar?></p>
        					</li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <!-- end comments -->

          <!-- Comment form -->
          <?=form_open('home/post-detail?id='.$id,['class' => 'comment-form inline-items'])?>
  					<div class="post__author author vcard inline-items">
  						<img src="<?=base_url('assets/')?>img/author-page.jpg" alt="author">

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

					<!-- ... end Post -->
				</div>
  </div>
</main>

<!-- ... end Main Content -->

<script type="text/javascript">
</script>
