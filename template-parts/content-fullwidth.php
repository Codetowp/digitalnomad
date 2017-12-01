<header class="entry-header" style="background-image: url(<?php echo the_post_thumbnail_url('digitalnomad_full_banner'); ?>);">
        <div class="content  wow fadeInUp">
            <div class="container "> 
                <div class="head-tag"><?php digitalnomad_entry_category(); ?></div>
                <h1><?php the_title(); ?> </h1>
                <a href="#"> </a><span class="date-article"><?php  digitalnomad_posted_on();?></span> <span class="byline"><?php echo esc_html_e('By', 'digitalnomad'); ?><span class="author vcard"><a href="#"><?php esc_url(the_author_posts_link()); ?></a>
            </div>
        </div>
    </header>
   
    <div class="container">
        <div class="row wow fadeInUp"> 
            <!--blog posts container-->
            <div class="col-md-8 col-md-offset-0 col-sm-12 single-post<?php echo esc_html(get_theme_mod( 'digitalnomad_sidebar_setting' ));?>">
                
                <article class="post">
                    <p><?php the_content();?></p>
                </article>