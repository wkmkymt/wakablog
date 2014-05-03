<?php get_header(); ?>
  <div class="main">
    <div class="wrap">
      <section class="contents column">
        <header>
          <h2>POST</h2>
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
              <?php the_content(); ?>
            </div>
          </div>
        </article>

        <nav class="page-nav">
          <ul>
            <li class="page-number"><?php previous_post_link("%link", "<", TRUE); ?></li>
            <li class="page-number"><?php next_post_link("%link", ">", TRUE); ?></li>
          </ul>
        </nav>

        <?php
        endwhile;
        else:
        ?>

        <p>None Post.</p>

        <?php
        endif;
        ?>
      </section>

      <?php get_sidebar(); ?>
    </div>
  </div>

  <?php get_footer(); ?>
