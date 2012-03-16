<!-- File: /app/View/Posts/view.ctp -->

<h2>Preview - <?php echo $post['Post']['title']?></h2>

<p><small>Criado em: <?php echo $post['Post']['created']?></small></p>

<p><?php echo $post['Post']['body']?></p>

<p><img src="<?php echo $post['Post']['image_path']?>"></a></p>

<p><img src="<?php echo $post['Post']['thumb_path']?>"></a></p>