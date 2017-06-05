<?php
$args = array('cat' => 2, 'author' => 'jesus', 'posts_per_page');
$filter_posts = new WP_Query($args);

if($filter_posts->have_posts() ) :
  while ($filter_posts->have_posts() ) :
    $filter_posts->the_post();
    ?>
    <h4><?php the_date() ?></h4>
    <h2 class="title-1"><?php the_title() ?></h2>
    <p class="p-1"><?php the_excerpt() ?></p>
    <a href="" class="btn-2 lk">LEER MÁS</a>
    <?php
endwhile;
else :
?>
<h4>No encontramos entradas</h4>
<?php
endif;
wp_reset_postsdata();
 ?>
