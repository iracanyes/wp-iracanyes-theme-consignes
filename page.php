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
                                <div id="overlay-video" class="overlay-video-intro">
                                    <img alt="<?php echo $videos['image']['alt'] ? $videos['image']['alt'] : ""; ?>" src="<?php echo $videos["image"]["url"]; ?>" class="img-responsive" />
                                    <a href="https://www.youtube.com/watch?v=MSEbKgpiY14" class="btn-intro-video"><i class="fa fa-play"></i></a>
                                </div>
                                <div id="thevideo" style="">
                                    <?php
                                    // IFRAME
                                    $iframe = $videos["video"];

                                    // Attribut src
                                    preg_match("/src='(.+?)'", $iframe, $matches);

                                    $src = $matches[1];

                                    // Ajout de paramètres à l'iframe
                                    $params = array(
                                        "controls" => 1,
                                        "hd" => 1,
                                        "autohide" => 1
                                    );

                                    $new_src = add_query_arg($params, $src);

                                    $iframe = str_replace($src, $new_src, $iframe);

                                    // Ajout attribut dans balise iFrame HTML
                                    $attributes = 'id="someFrame" width="750" height="422" frameborder="0" allowfullscreen ';

                                    $iframe = str_replace(
                                            '></iframe>',
                                            ' '.$attributes.'></iframe>',
                                            $iframe
                                    );

                                    // Affichage de l'iframe
                                    echo $iframe;

                                    // Récupération de l'Icon Play
                                    $iconPlay = $videos['image'];
                                    ?>

                                </div>

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
            <section id="section-team" class="bg-grey">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2>The Great Team</h2>                                
                                <div class="tiny-border"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-box">
                                <div class="team-inner">
                                    <img src="images/team/thumb-1.png" alt="" class="img-circle">
                                    <div class="mask"></div>
                                </div>                                
                                <h6>Peter Hart</h6>
                                <div class="subtext">Creative Director</div>
                            </div>                     
                        </div>
                        <div class="col-md-3">
                            <div class="team-box">
                                <div class="team-inner">
                                    <img src="images/team/thumb-2.png" alt="" class="img-circle">
                                    <div class="mask"></div>
                                </div>                                
                                <h6>Betty Lane</h6>
                                <div class="subtext">Marketing Manager</div>
                            </div>                      
                        </div>
                        <div class="col-md-3">
                            <div class="team-box">
                                <div class="team-inner">
                                    <img src="images/team/thumb-3.png" alt="" class="img-circle">
                                    <div class="mask"></div>
                                </div>                                
                                <h6>Richard Pierce</h6>
                                <div class="subtext">Risk Analyst</div>
                            </div>                                
                        </div>
                        <div class="col-md-3">
                            <div class="team-box">
                                <div class="team-inner">
                                    <img src="images/team/thumb-4.png" alt="" class="img-circle">
                                    <div class="mask"></div>
                                </div>
                                <h6>Janice Rose</h6>
                                <div class="subtext">Accountant</div>
                            </div>                                
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->

<?php
// FOOTER
get_footer();
?>
