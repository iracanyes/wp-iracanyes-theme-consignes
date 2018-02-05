<?php
/**
 *
 */

//HEADER
get_header();
?>


        <!-- content begin -->
        <div id="content" class="no-padding">

            <!-- section begin -->
            <section id="about-intro">                
                <div class="container">
                    <div class="row">                                                
                        <div class="col-md-8 col-md-offset-2">
                            <?php
                            if($section1 = get_field("section1")):
                            ?>
                            <div class="about-text-intro text-center">
                                <h2>
                                    <?php
                                    echo $section1["titre"];
                                    ?>
                                </h2>
                                <p>
                                    <?php
                                    echo $section1["texte"];
                                    ?>
                                </p>
                            </div>
                            <?php
                            endif;

                            // SECTION VIDEO
                            $videos = get_field("section_video");

                            if(!empty($videos)):

                            ?>
                                <div class="box-intro-video">
                                    <?php
                                        // le iFrame HMTL
                                        $iframe = $videos["video"];

                                        //echo $iframe;
                                        // recherche de l'attribut src
                                        preg_match('/src="(.+?)"/', $iframe, $matches);
                                        $src = $matches[1];

                                        // Ajout de paramètres à l'iframe
                                        $params = array(
                                            "controls" => 1,
                                            "hd" => 1,
                                            "autohide" => 1
                                        );

                                        $new_src = add_query_arg($params, $src);

                                        $iframe = str_replace($src, $new_src, $iframe);
                                        
                                        // Ajout d'attributs à la balise IFrame HTML
                                        $attributes = 'id="monFrame" width="750" height="422" frameborder="0" ';

                                        $iframe = str_replace(
                                            '></iframe>',
                                            ' '.$attributes.'></iframe>',
                                            $iframe
                                        );
                                    ?>
                                    <div id="overlay-video" class="overlay-video-intro">
                                        <img alt="<?php echo $videos['image']['alt'] ? $videos['image']['alt'] : ""; ?>" src="<?php echo $videos["image"]["url"]; ?>" class="img-responsive" />

                                        <a href="#" class="btn-intro-video"><i class="fa fa-play"></i></a>

                                    </div>

                                    <div id="thevideo" style="display:none;">
                                        <?php
                                        // Affichage de l'iframe
                                        echo $iframe;

                                        ?>
                                    </div>
                                    <style>

                                        #thevideo {
                                            position: relative;
                                            padding-bottom: 0%;
                                            overflow: hidden;
                                            max-width: 100%;
                                            height: auto;
                                        }

                                        #thevideo iframe,
                                        #thevideo object,
                                        #thevideo embed {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        button.ytp-large-play-button{
                                            background: url("<?php echo $videos['image']['url']; ?>") !important;
                                            height: 48px;
                                            width: 68px;
                                        }

                                        button.ytp-large-play-button svg{
                                            display: none;

                                        }

                                    </style>


                                </div>

                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-about" class="margin-top-80">                
                <div class="container">
                    <?php
                    if(have_rows("section2")):
                    ?>
                    <div class="row">
                        <?php
                        while(have_rows("section2")): the_row();
                        ?>
                        <div class="col-md-4">
                            <h5>
                                <?php
                                the_sub_field("titre");
                                ?>
                            </h5>
                            <p>
                                <?php
                                the_sub_field("texte");
                                ?>
                            </p>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php
                    endif;
                    ?>
                </div>        
            </section>
            <!-- section close -->

            <!-- section begin -->
            <?php
            include_once ("include/equipe.php");
            ?>
            <!-- section close -->
            
        </div>
        <!-- content close -->

<?php
// FOOTER
get_footer();
?>
