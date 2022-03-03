<?php get_header() ?>
<main class="site__main">
<h1>----front-page.PHP----</h1>
<section class="animation">
<div class="animation__block">1</div>
<div class="animation__block">2</div>
<div class="animation__block">3</div>
<div class="animation__block">4</div>
<div class="animation__block">5</div>
</section>
    <?php if(have_posts()):the_post(); ?>
       <?php the_title(); ?>
       <?php the_content(); ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>