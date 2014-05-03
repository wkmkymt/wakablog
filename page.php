<?php get_header(); ?>
  <div class="main">
    <div class="wrap">
      <section class="contents column">
        <header>
          <h2>PAGE</h2>
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

            <div class="content-wrap">
              <?php the_content(); ?>
            </div>
          </div>
        </article>

        <?php
        endwhile;
        else:
        ?>

        <p>None Page.</p>

        <?php
        endif;
        ?>
      </section>

      <?php get_sidebar(); ?>
    </div>
  </div>

  <?php get_footer(); ?>
