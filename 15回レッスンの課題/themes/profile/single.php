<?php
 /*
 Template Name: 写真投稿ページ
 Template Post Type: post
 */
 ?>


  <section id="bicycle" class="wrapper">
    <h2 class="section-title">Bicycle</h2>
    <ul>

      <li>
        <img src="<?php the_post_thumbnail_url('/img/fill'); ?>">
        <h3 class="content-title"><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_content(), 50, '…'); ?></p>
      </li>

    </ul>
  </section>