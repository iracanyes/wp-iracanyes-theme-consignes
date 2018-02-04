<?php
/**
 * Description : template article
 */

// HEADER
get_header();
?>

        <?php
        if(have_posts()):
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
                        <h1><?php the_title(); ?></h1>
                        <ul class="breadcrumbs">
                            <li><a href="<?php get_permalink(7); ?>"><?php _e('Accueil', "wp-theme-base-translate"); ?></a></li>
                            <b>/</b> 
                            <li class="active"><?php the_title(); ?></li>
                        </ul>            
                    </div>
                </div>
            </div>
        </section>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-9">
                        <div class="blog-single">
                            <!-- post begin -->
                            <article>
                                <?php
                                if($image = get_field("image")):
                                ?>
                                <div class="post-media">
                                    <img src="<?php echo $image["sizes"]["medium"]; ?>" class="img-responsive">
                                </div>
                                <?php
                                endif;
                                ?>
                                <div class="post-content">
                                    <div class="post-title">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                    <div class="post-metadata">                                        
                                        <span class="posted-on">
                                            <i class="fa fa-clock-o"></i>
                                            <?php the_time("F j, Y"); ?>
                                        </span>
                                        <span class="byline">
                                            <i class="fa fa-user"></i>
                                            <?php the_author(); ?>
                                        </span>
                                        <span class="cat-links">                                            
                                            <i class="fa fa-folder-open"></i>
                                            <?php the_category(", "); ?>
                                        </span>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="post-entry">
                                        <?php
                                        the_content();
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                            <!-- post close -->
                        </div>

                        
                    </div>
                    <div class="col-md-3">
                        <div class="main-sidebar">
                            <aside class="widget widget_text">
                                <h3 class="widget-title">About</h3>
                                <div class="tiny-border"></div>                                         
                                <div class="textwidget">
                                    <p>
                                        Nulla eleifend, sapien eget porttitor maximus, nisl ante convallis dolor, nec consequat felis ex a ex. Etiam vestibulum enim euismod dui vestibulum, vitae fringilla nibh consectetur. Integer at volutpat augue. Donec consectetur, est nec laoreet scelerisque, lacus nulla fermentum odio, ut accumsan enim ipsum a justo.
                                    </p>                              
                                </div>
                            </aside>
                            <aside class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>
                                <div class="tiny-border"></div>    
                                <ul>
                                    <li class="cat-item"><a href="#">Finance</a></li>
                                    <li class="cat-item"><a href="#">Bilan</a></li>
                                    <li class="cat-item"><a href="#">Conseils</a></li>
                                    <li class="cat-item"><a href="#">Juridique</a></li>
                                </ul>
                            </aside>
                        </div>                        
                    </div>
                </div>
            </div> 
        </div>
        <!-- content close -->
        <?php
        endif;
        ?>
<?php
// FOOTER
get_footer();
?>