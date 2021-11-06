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
        <?php 
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));
        if($parentPost or $testArray) { ?>
    <div class="children-links">
            <h2>
                <a href="<?php echo get_permalink($parentPost); ?>"><?php echo get_the_title($parentPost);?></a>
            </h2>
            <ul>
                <?php
                if($parentPost){
                    $childrenOf = $parentPost;
                }else{
                    $childrenOf = get_the_ID();
                }
                wp_list_pages(array(
                    'title_li' => NULL,
                    'child_of' => $childrenOf
                )); 
                ?>
            </ul>
    </div>
    <?php } ?>
    <?php the_content(); ?>
</div>
    
<?php get_footer(); ?>