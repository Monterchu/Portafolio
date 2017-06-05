<?php get_header() ?>

<!-- noticias -->
  <section class="section-blog m fd-c m4 df">
    <article class="article-blog">
      <div class="text-blog">

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
            <h2 class="title-1"><?php the_title() ?></h2>
            <h4><?php the_date() ?></h4>
            <p class="p-1"><?php the_content() ?></p>
            <?php
        endwhile;
        else :
        ?>
        <h4>No encontramos entradas</h4>
        <?php
        endif;
         ?>
      </div>
    </article>
  </section>
<!-- /noticias -->

<!-- footer -->
<?php get_footer() ?>
<!-- /footer -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js'></script>
<script type="text/javascript" src='lib/jdmc.js'></script>

</body>
