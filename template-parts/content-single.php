
  <header class="entry-header-bottom" style=" <?php if ( has_post_thumbnail() ) { ?>background-image: url(<?php echo the_post_thumbnail_url('digitalnomad_full_banner'); ?>); <?php } ?>">
        <div class="content  wow fadeInUp">
            <div class="container "> 
                <div class="head-tag"><?php digitalnomad_entry_category(); ?></div>
                <h1><?php the_title(); ?> </h1>
                <a href="#"> </a><span class="date-article"><?php  digitalnomad_posted_on();?></span>  
            </div>
        </div>
    </header>
   
    <div class="container">
        <div class="row wow fadeInUp"> 
            <!--blog posts container-->
            <div class="col-md-10 col-md-offset-1 col-sm-12 single-post">
                
                <article class="post">
                    <p><?php the_content();?></p>
                </article>
                