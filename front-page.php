<?php get_header(); ?>

<div class="banner">
    <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/open-book.jpg">    
    </div>
    <div class="banner-content">
        <h1 class="heading">Welcome</h1>
        <h2>Workers of the world, unite!</h2>
        <button>Join</button>
    </div>
</div>
<section class="sections">
    <div class="events">
        <h2>Event Calendar</h2>
        <div class="event">
            <h3>A fake event</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti asperiores corporis, culpa aspernatur cupiditate neque iste dolorem rem blanditiis necessitatibus!</p>
        </div>
        <div class="event">
            <h3>Another fake event</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti asperiores corporis, culpa aspernatur cupiditate neque iste dolorem rem blanditiis necessitatibus!</p>
        </div>
    </div>
    <div class="blogs">
        <h2>Latest Union News</h2>
        <?php 
            $latestPosts = new WP_Query(array(
                'posts_per_page' => 2,

            ));
            while($latestPosts -> have_posts()){
                $latestPosts -> the_post(); ?>
                <div class="front-blog">
                    <a href="<?php the_permalink(); ?>">
                        <div class="front-date">
                            <p class="month"><?php the_time('M'); ?></p>
                            <p class="date"><?php the_time('d'); ?></p>
                        </div>
                    </a>
                    <div class="front-details">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?> <a href="<?php the_permalink(); ?>">Read more</a></p>
                    </div>
                </div>
        <?php } wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>