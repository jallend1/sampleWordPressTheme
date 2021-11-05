<?php get_header(); ?>
<div class="page-banner">
    <h1 class="heading"><?php the_title(); ?></h1>
    <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iure deleniti veritatis molestiae repudiandae earum repellat?</h2>
</div>
<div class="page-content">
<nav class="page-nav">
    <div>
        <p>Home</p>
    </div>
    <div>
        <p><?php the_title(); ?></p>
    </div>
</nav>
    <?php the_content(); ?>
</div>
    
<?php get_footer(); ?>