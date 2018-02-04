<?php
/**
 *
 */
// Header de la page
get_header();
?>

        <!-- slider -->
        <div id="slider">
            <?php
            $images = get_field("slider_accueil");
            $size = "full";

            if($images) :
            ?>
            <!-- revolution slider begin -->
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <?php
                        foreach ($images as $image):
                        ?>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE
                            <img src="img-rev-slider/bg-1.jpg" alt="">
                            -->
                            <?php
                            echo wp_get_attachment_image(
                                    $image["ID"],
                                    $size
                            );
                            ?>
                        </li>
                        <?php
                        endforeach;
                        ?>

                    </ul>
                </div>
            </div>
            <!-- revolution slider close -->
            <?php
            endif;
            ?>
        </div>
        <!-- slider close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">

            <!-- section begin -->
            <section id="section-about">
                <?php
                // Section 1 = ACF Image, Titre et WYSIWYG
                $section1 = get_field("section1_exam");

                if($section1):
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo $section1["image"]["url"]; ?>" alt="<?php echo $section1["image"]["alt"]; ?>" class="img-responsive">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="about-box">
                                <h2 class="box-title">
                                    <?php
                                    echo $section1["titre"];
                                    ?>
                                </h2>
                                <div class="tiny-border"></div>

                                <?php
                                echo $section1["texte"];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endif;
                ?>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-project" class="no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="latest-projects clearfix">
                                <div class="latest-projects-intro">
                                    <h2 class="box-title"><?php _e("Derniers articles","wp-theme-base-translate"); ?></h2>
                                    <div class="tiny-border-light"></div>            
                                    <p>
                                        <?php
                                        _e("Quand on suit quelqu'un de bon, on apprend à devenir bon ; quand on suit un tigre, on apprend à mordre.", 'wp-theme-base-translate');
                                        ?>
                                    </p>
                                </div>
                                <div class="latest-projects-wrapper">
                                    <?php
                                    $posts = wp_get_recent_posts(
                                        array(
                                            "numberposts" => 6,
                                            "orderby" => "post_date",
                                            "order" => "DESC",
                                            "post_type" => "post"
                                        ),
                                        ARRAY_A
                                    );

                                    if($posts):
                                    ?>
                                    <div id="latest-projects-items" class="latest-projects-items">
                                        <?php
                                        foreach ($posts as $post):
                                        ?>
                                        <div class="item">
                                            <!--
                                            <img src="images/projects/small-2.jpg" alt="" class="img-responsive">
                                            -->
                                            <?php
                                            echo get_the_post_thumbnail(
                                                    $post["ID"],
                                                    "post-thumbnail",
                                                    array("class" => "img-responsive")
                                            );
                                            ?>
                                            <div class="project-details">
                                                <p class="folio-title"><a href="<?php echo get_permalink($post["ID"]); ?>"><?php echo get_the_title(); ?></a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i>
                                                    <?php
                                                    echo get_the_category_list(", ", "", $post["ID"]);
                                                    ?>
                                                </p>
                                                <div class="folio-buttons">
                                                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/medium-1.jpg" title="<?php echo $post['post_title']; ?>" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="<?php echo get_permalink($post['ID']); ?>"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section>
                <!-- Container Begin -->
                <div class="container">
                <?php
                if($rows = get_field("accueil_3box")):
                ?>
                    <div class="row">
                        <?php
                        foreach ($rows as $row):
                        ?>
                        <div class="col-md-4">
                            <div class="service-box service-style2">
                                <!--
                                <img src="images/services/thumbs-1.png" alt="" class="img-responsive">
                                -->
                                <i class="fa <?php echo $row["accueil_3box_icon"]; ?>"></i>
                                <div class="service-content">
                                    <h3>
                                        <?php
                                        echo $row["accueil_3box_titre"];
                                        ?>
                                    </h3>
                                    <p>
                                        <?php
                                        echo $row["accueil_3box_texte"];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                <?php
                endif;
                ?>
                </div>
                <!-- Container End -->
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->
       
<?php
// FOOTER
get_footer();
?>