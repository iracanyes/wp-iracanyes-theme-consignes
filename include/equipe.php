<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Date: 04.02.18
 * Time: 17:34
 */
?>

<!-- section begin -->
<section id="section-team" class="bg-grey">
    <div class="container">
        <?php
        if(have_rows("section3")):
            while(have_rows("section3")): the_row();
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2><?php the_sub_field("section3_titre"); ?></h2>
                            <div class="tiny-border"></div>
                        </div>
                    </div>
                    <?php

                    if(have_rows("equipe")):
                        while(have_rows("equipe")): the_row();
                            ?>
                            <div class="col-md-3">
                                <div class="team-box">
                                    <div class="team-inner">
                                        <!--

                                        -->
                                        <?php
                                        $image = get_sub_field("photo");

                                        ?>
                                        <img src="<?php echo $image['url']; ?>" alt="" class="img-circle">
                                        <div class="mask"></div>
                                    </div>
                                    <h6><?php echo get_sub_field("nom"); ?></h6>
                                    <div class="subtext"><?php echo get_sub_field("fonction"); ?></div>
                                </div>
                            </div>

                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<!-- section close -->
