<?php
/**
 * Template Name: Contact
 * Description: Page Contact
 */

// HEADER
get_header();
?>

    <!-- content begin -->
    <div id="content" class="no-padding">

        <!-- section begin -->
        <section id="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <?php
                    if(have_posts()):
                        while(have_posts()): the_post();
                    ?>
                        <div class="intro-text text-center">
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    <?php
                        endwhile;
                    endif;

                    ?>
                        <!--
                        <form action="" class="wpcf7-form">
                            <div class="col-one-third">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-one-third margin-one-third">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="col-one-third">
                                <input type="text" placeholder="Your Phone">
                            </div>
                            <div class="col-full"><textarea placeholder="Your Message"></textarea></div>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <div class="divider-single"></div>
                                <button class="btn btn-primary btn-big">Send Email</button>
                            </div>
                        </form>
                        -->
                        <?php
                        if($form = get_field("contact_form")):
                            echo $form;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section gmap begin -->
        <section id="section-gmap" class="no-padding">
            <div id="map-canvas" class="map-canvas"></div>
        </section>
        <!-- section gmap close -->

    </div>
    <!-- content close -->
       


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEgdMODEkYBGIiSkO1i9JJYvAdGfQz6uE"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact.js"></script>
    
<?php
// FOOTER
get_footer();
?>