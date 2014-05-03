<?php get_header(); ?>
  <div class="main">
    <div class="wrap">
      <section class="contents column">
        <header>
          <h2>POSTS</h2>
        </header>

        <?php
        if(have_posts()):
         while(have_posts()):
           the_post();
        ?>

        <article class="entry">
          <div class="entry-wrap">
            <header>
              <h1><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>

            <footer>
              <ul>
                <li>
                  <span>Diary:</span>
                  <a href=""><time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time></a>
                </li>
                <li>
                  <span>Category:</span>
                  <?php the_category(", "); ?>
                </li>
              </ul>
            </footer>

            <div class="content-wrap">
              <figure class="eyecatch">
                <?php if(has_post_thumbnail()): ?>
                  <a href=""><?php the_post_thumbnail(array(144, 144)); ?></a>
                <?php else: ?>
                  <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/wkm.png" /></a>
                <?php endif; ?>
              </figure>

              <?php the_excerpt(); ?>
            </div>
          </div>
        </article>

        <?php
        endwhile;
        else:
        ?>

        <p>None Post.</p>

        <?php
        endif;
        ?>

        <nav class="page-nav">
          <ul>
            <li class="page-number"><?php previous_posts_link("<"); ?></li>
            <li class="page-number"><?php next_posts_link(">"); ?></li>
          </ul>
        </nav>
      </section>

      <?php get_sidebar(); ?>
    </div>
  </div>

  <?php get_footer(); ?>
