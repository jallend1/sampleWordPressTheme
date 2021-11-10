<?php get_header(); ?>

<div class="page-banner">
    <h1 class="heading">
        <?php
            if(is_author()){
                echo 'Posts by '; the_author();
            } else {
                the_archive_title();
            } 
        ?>
    </h1>
    <h2 class="subtitle"><?php the_archive_description(); ?></h2>
</div>
<div class="page-content">
    <?php while(have_posts()){
        the_post(); ?>
        <div class="blog-post">
            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="blog-details">
                <p>Posted by 
                    <?php the_author_posts_link(); ?> 
                    on <?php the_time('F j, Y'); ?> 
                    in <?php echo get_the_category_list(', '); ?>.
                </p>
            </div>
            <div class="blog-content">
                <?php the_excerpt(); ?>
                <p><a href="<?php echo the_permalink(); ?>">Continue reading &raquo; </a></p>
            </div>
        </div>
    <?php } 
        echo paginate_links();
    ?>
    
</div>

<?php get_footer(); ?>