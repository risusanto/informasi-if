<div id="newsfeed-items-grid">
  <?php $lastID = 0; ?>
  <?php foreach ($posts as $post): ?>
  <div class="ui-block">

        <!-- Post -->
        <?php
          $role_temp = $this->User_m->get_row(['username' => $post['username']])->role;
          if ($role_temp == 'admin' ) {
            $author = $this->Admin_m->get_row(['username' => $post['username']]);
          }
          if ($role_temp == 'dosen' ) {
            $author = $this->Dosen_m->get_row(['username' => $post['username']]);
          }
         ?>
        <article class="hentry post has-post-thumbnail">

          <div class="post__author author vcard inline-items">
            <?php if ($role_temp == 'admin'): ?>
              <img src="<?=base_url('assets/')?>img/avatar1.jpg" alt="author">
            <?php endif; ?>
            <?php if ($role_temp == 'dosen'): ?>
              <img src="<?=base_url('assets/')?>img/avatar12-sm.jpg" alt="author">
            <?php endif; ?>

            <div class="author-date">
              <a class="h6 post__author-name fn" href="javascript:void()"><?=$author->nama?></a>
              <div class="post__date">
                <time class="published" datetime="<?=$post['date']?>">
                  <?=$post['date']?>
                </time>
              </div>
            </div>

          </div>

          <p><?=$post['isi']?></p>

          <?php
            $files = $this->Download_m->get(['id_info' => $post['id_info']]);
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
            <?php
              $comments = $this->Komentar_m->get(['id_info' => $post['id_info']]);
             ?>
            <div class="comments-shared">
              <a href="<?=base_url('home/post-detail?id='.$post['id_info'])?>" class="post-add-icon inline-items">
                <svg class="olymp-speech-balloon-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
                <span><?=count($comments)?></span>
              </a>
            </div>


          </div>

          <div class="control-block-button post-control-button">

            <a href="#" class="btn btn-control">
              <svg class="olymp-comments-post-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
            </a>

          </div>

        </article>

        <!-- ... end Post -->
      </div>
      <?php $lastID = $post['id_info']; ?>
      <?php endforeach; ?>
</div>

<?php if ($postNum > $postLimit): ?>
  <a id="btn-more-button" href="#" lastID="<?= $lastID ?>" class="btn btn-control btn-more" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
  <?php else: ?>
    <a id="btn-more-button" href="#" lastID="0" class="btn btn-control btn-more" data-container="newsfeed-items-grid">End</a>
<?php endif; ?>
