<?php
// template name: pagetemplate
 ?>
<?php get_header() ?>
<body class="bg">
<!-- nav -->
<div class="nav-blog">
  <nav class="df jc-b ai-b m header">
    <div class=''>
      <a href="#" class="lk bm m">
        <img src="img/Hamburguesa.png" width='50' alt="Menu" id="bm" class="f">
      </a>
      <div class="mr df jc-c ai-c h" id='mr'>
        <ul class="ls-n">
          <a href="index.html"><img src="https://scontent.fbog2-2.fna.fbcdn.net/v/t1.0-9/12208684_10153253626258697_7413417102236425354_n.jpg?oh=21ea85c9c67f5f2bf6413421451576b9&oe=598ED021" alt="Avatar" class="a-1">
            </a>
          <li><a href="blog.html" class="lk ac">Blog</a></li>
          <li><a href="#" class="lk">Diseño</a></li>
          <li><a href="#" class="lk">Frontend</a></li>
          <li><a href="#contacto" class="lk">Contacto</a></li>
        </ul>
      </div>
    </div>
    <div class="">
      <img src="img/isotipo.png" width='60' alt="">
    </div>
  </nav>
</div>
<!-- /nav -->

<!-- noticias -->
  <section class="section-blog m fd-c m4 df">
    <article class="article-blog">
      <div>
        <img data-src="img/disenoweb.jpg" class='img-blog' alt="">
      </div>
      <div class="text-blog">
        <?php
        if(have_posts() ) :
          while (have_posts() ) :
            the_post();
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
