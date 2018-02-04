<?php
/**
 * Description : template article
 */
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
                                <div class="post-media">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <div class="post-title">
                                        <h1>Nom de l'article</h1>
                                    </div>
                                    <div class="post-metadata">                                        
                                        <span class="posted-on">
                                            <i class="fa fa-clock-o"></i>
                                            November 30, 2016
                                        </span>
                                        <span class="byline">
                                            <i class="fa fa-user"></i>
                                            <a href="#">AuThemes</a>
                                        </span>
                                        <span class="cat-links">                                            
                                            <i class="fa fa-folder-open"></i>
                                            <a href="#">Markup</a>
                                        </span>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="post-entry">
                                        <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  Cras facilisis quam sed rhoncus dapibus. Quisque lorem enim, dictum at magna eu, hendrerit hendrerit arcu. Etiam vulputate ac tortor ac gravida. Proin accumsan placerat rutrum. Praesent ut eros ac nisi ultrices rhoncus et.</p> 
                                        <p>Nulla fermentum eros vitae est finibus dapibus. Aliquam porta nulla a elit varius efficitur. In in magna sed turpis venenatis tristique eu eget neque. Duis condimentum libero ornare quam tincidunt interdum. Phasellus porttitor nisi ut lectus pellentesque, ut fringilla leo convallis. </p>
                                        <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  Cras facilisis quam sed rhoncus dapibus. Quisque lorem enim, dictum at magna eu, hendrerit hendrerit arcu. Etiam vulputate ac tortor ac gravida. Proin accumsan placerat rutrum. Praesent ut eros ac nisi ultrices rhoncus et.</p>
                                        <p>Nulla fermentum eros vitae est finibus dapibus. Aliquam porta nulla a elit varius efficitur. In in magna sed turpis venenatis tristique eu eget neque. Duis condimentum libero ornare quam tincidunt interdum. Phasellus porttitor nisi ut lectus pellentesque, ut fringilla leo convallis. </p>
                                        <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  Cras facilisis quam sed rhoncus dapibus. Quisque lorem enim, dictum at magna eu, hendrerit hendrerit arcu. Etiam vulputate ac tortor ac gravida. Proin accumsan placerat rutrum. Praesent ut eros ac nisi ultrices rhoncus et.</p>
                                        <p>Nulla fermentum eros vitae est finibus dapibus. Aliquam porta nulla a elit varius efficitur. In in magna sed turpis venenatis tristique eu eget neque. Duis condimentum libero ornare quam tincidunt interdum. Phasellus porttitor nisi ut lectus pellentesque, ut fringilla leo convallis. </p>
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