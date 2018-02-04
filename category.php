<?php
/**
 * Description: Category List Template
 */

//HEADER
get_header();
?>

        <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
            <style>
                #subheader{
                    background: url("<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>");
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php single_cat_title(); ?></h1>
                        <ul class="breadcrumbs">
                            <li><a href="<?php echo get_permalink(7); ?>"><?php _e("Accueil", "wp-theme-base-translate"); ?></a></li>
                            <b>/</b> 
                            <li class="active"><?php single_cat_title(); ?></li>
                        </ul>            
                    </div>
                </div>
            </div>
        </section>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <?php
                wp_reset_postdata();
                if(have_posts()):
                ?>
                <div class="row"> 
                    <div id="blog-grid" class="blog-grid">
                        <?php
                        while(have_posts()):
                            the_post();
                        ?>
                        <!-- post begin -->
                        <article class="item col-md-4 col-sm-6">
                            <div class="post-media">
                                <img  alt="" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0]; ?>" class="img-responsive">
                                <div class="post-date">
                                    <span class="date-day"><?php the_time("j"); ?></span>
                                    <span class="date-month"><?php the_time("F"); ?></span>
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                </div>
                                <div class="post-metadata">
                                    <span class="byline">
                                        <i class="fa fa-user"></i>
                                        <?php the_author(); ?>
                                    </span>
                                    <span class="cat-links">                                            
                                        <i class="fa fa-folder-open"></i>
                                        <?php the_category(", ") ?>
                                    </span>
                                       
                                </div>
                                <div class="post-entry">
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    
                                </div>
                            </div>
                        </article>
                        <!-- post close -->
                        <?php
                        endwhile;
                        ?>
                    </div>

                    <!-- pagination begin -->
                    <div class="pagination-ourter text-center">
                        <ul class="pagination">
                            <li>
                                <!--
                                <a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a>
                                -->
                                <?php
                                if(get_previous_posts_link()):
                                    previous_posts_link('<i class="fa fa-angle-left"></i>');
                                else:
                                    ?>
                                    <span class="prev page-numbers">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                <?php
                                endif;
                                ?>
                            </li>
                            <li>
                                <!--
                                <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                                -->
                                <?php
                                if(get_next_posts_link()):

                                    next_posts_link('<i class="fa fa-angle-right"></i>');
                                else:
                                    ?>
                                    <span class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></span>
                                <?php
                                endif;
                                ?>
                            </li>
                        </ul>
                    </div>
                    <!-- pagination close -->
                             
                </div>
                <?php
                endif;
                ?>
            </div> 
        </div>
        <!-- content close -->
       
<?php
// FOOTER
get_footer();
?>