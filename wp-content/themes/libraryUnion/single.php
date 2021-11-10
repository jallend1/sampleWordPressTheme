<?php get_header();  ?>

<?php while(have_posts()){ 
    the_post(); ?>
    <div class="page-banner">
        <h1 class="heading"><?php the_title(); ?></h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iure deleniti veritatis molestiae repudiandae earum repellat?</h2>
    </div>
    <div class="page-content">
        <nav class="page-nav">
            <div>
                <a href="<?php echo site_url('/blog'); ?>">    
                    <p>Blog Home</p>
                </a>
            </div>
            <div class="blog-details">
                <p>Posted by 
                    <?php the_author_posts_link(); ?> 
                    on <?php the_time('F j, Y'); ?> 
                    in <?php echo get_the_category_list(', '); ?>.
                </p>
            </div>
        </nav>
        <div class="blog-content">    
            <?php the_content(); ?>    
        </div>
    </div>
    <?php } 

    get_footer(); 
?>

