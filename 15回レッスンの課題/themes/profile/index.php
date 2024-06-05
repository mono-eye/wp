<?php get_header(); ?>

<main>
  <div id="mainvisual">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.jpg" alt="テキストテキストテキスト">
  </div>

  <section id="about" class="wrapper">
    <h2 class="section-title">About</h2>
    <div class="content">
      <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="テキストテキストテキスト">
      <div class="text">
        <h3 class="content-title">KAKERU MIYAICHI</h3>
        <p>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>
  </section>

  <section id="bicycle" class="wrapper">
    <h2 class="section-title">Bicycle</h2>
    <?php if (have_posts()): ?>
      <ul>
        <?php while (have_posts()):the_post(); ?>
          <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/bicycle1.jpg" alt="" />
              <h3 class="content-title"><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 50, '…'); ?></p>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>