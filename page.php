<?php get_header(); ?>
<div class="page-banner">
    <h1 class="heading"><?php the_title(); ?></h1>
    <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iure deleniti veritatis molestiae repudiandae earum repellat?</h2>
</div>
<div class="page-content">
<!-- If child has a parent page, display breadcrumbs -->
<?php
    $parentPost = wp_get_post_parent_id(get_the_ID());
    if($parentPost){ ?>
            <nav class="page-nav">
            <div>
                <a href="<?php echo get_permalink($parentPost); ?>">    
                    <p><?php echo get_the_title($parentPost); ?></p>
                </a>
                </div>
            <div>
                <p><?php the_title(); ?></p>
            </div>
        </nav>
    <?php } ?>
    <?php the_content(); ?>
</div>
    
<?php get_footer(); ?>