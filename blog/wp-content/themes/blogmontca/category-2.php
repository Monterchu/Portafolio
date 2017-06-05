<?php get_header() ?>


<!-- noticias -->
<div class="m1 df jc-b">

  <section class="m4 section-blog fd-c df">
    <article class="article-blog">
        <?php
        if(have_posts() ) :
          while (have_posts() ) :
            the_post();
            ?>
            <?php
            if (has_post_thumbnail()) { ?>
            <div>
              <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class='img-blog' alt="">
            </div>
            <?php
           }
             ?>
            <div class="text-blog">
            <h4><?php the_date() ?></h4>
            <h2 class="title-1"><?php the_title() ?></h2>
            <p class="p-1"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-2 lk">LEER MÁS</a>
            <?php
        endwhile;
        else :
        ?>
        <h4>No encontramos entradas</h4>
        <?php
        endif;
        // wp_reset_postdata();
         ?>
      </div>
    </article>

  </section>



</div>
<!-- /noticias -->

<!-- footer -->
<?php get_footer() ?>
<!-- /footer -->
