<div id="newsfeed-items-grid">
  <?php $lastID = 0; ?>
  <?php foreach ($posts as $post): ?>
  <div class="ui-block">

        <!-- Post -->

        <article class="hentry post has-post-thumbnail">

          <div class="post__author author vcard inline-items">
            <img src="<?=base_url('assets/')?>img/author-page.jpg" alt="author">

            <div class="author-date">
              <a class="h6 post__author-name fn" href="02-ProfilePage.html"><?=$post['username']?></a>
              <div class="post__date">
                <time class="published" datetime="<?=$post['date']?>">
                  <?=$post['date']?>
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

          <p><?=$post['isi']?></p>

          <div class="post-additional-info inline-items">


            <div class="comments-shared">
              <a href="#" class="post-add-icon inline-items">
                <svg class="olymp-speech-balloon-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
                <span>16</span>
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
