<?php

get_header();

if(have_posts()) :
    while(have_posts()) : the_post();
        ?>
        <article class="post">
            <h2><?php echo the_title();?></h2>
            <?php echo the_content();?>
        </article>
    <?php endwhile;

else :
    echo "<p>No Content Found</p>";
endif;

get_footer();
?>