<!-- Main Content -->

<main class="col col-12">

  <div id="newsfeed-items-grid">
    <?php  $lastID = 0;  ?>
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


							<div class="comments-shared">
								<a href="<?=base_url('home/post-detail?id='.$post['id_info'])?>" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
									<span>16</span>
								</a>
							</div>


						</div>

						<div class="control-block-button post-control-button">

							<a href="<?=base_url('home/post-detail?id='.$post['id_info'])?>" class="btn btn-control">
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
</main>

<!-- ... end Main Content -->

<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        var lastID = $('.btn-more').attr('lastID');
        if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastID != 0)){
            $.ajax({
                type:'GET',
                url:'<?php echo base_url('home/loadMoreData'); ?>',
                data:'id_info='+lastID,
                beforeSend:function(){
                    $('.btn-more').show();
                },
                success:function(html){
                    $('.btn-more').remove();
                    $('#newsfeed-items-grid').append(html);
                }
            });
        }
    });
});
</script>
