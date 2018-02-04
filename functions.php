<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Date: 04.02.18
 * Time: 12:52
 */

if(!function_exists("wp_base_theme_setup")):
    function wp_base_theme_setup()
    {
        // Support pour les menus
        add_theme_support("menus");

        // Support sidebars
        add_theme_support("sidebars");


    }

    add_action("after_setup_theme", "wp_base_theme_setup");

endif;
/*
 * Définition des menus du thème
 */
register_nav_menus(
    array(
        "main-menu" => __("Menu principal","menu-primaire"),
        "footer-menu" => __("Menu bas de page", "menu-bas-de-page"),
        "sidebar-menu" => __("Menu secondaire", "menu-secondaire")
    )
);

/*
 * Définition de widget pour le thème
 */
if(!function_exists("wp_base_theme_widgets_init")):
    function wp_base_theme_widgets_init(){

        // Un widget de type texte en bas de page
        register_sidebar(
            array(
                "id" => "text-bloc-footer",
                "name" => __("Footer : Widget", "wp-theme-base-translate"),
                "description" => __("Ajout d'un contenu textuel ou autre.", "wp-theme-base-translate"),
                "before_widget" => "",
                "after_widget" => "",
                "before_title" => "<h3 class=\"widget-title\">",
                "after_title" => "</h3>",
            )
        );

        //Un widget de type texte à droite de la page détails de tous les articles
        register_sidebar(
            array(
                "name" => __("Sidebar : Widget", "wp-theme-base-translate"),
                "id" => "text-bloc-sidebar",
                "description" => __("Ajout d'un contenu textuel ou autre.", "wp-theme-base-translate"),
                "before_widget" => "<aside class=\"widget widget_text\">",
                "after_widget" => "</aside>",
                "before_title" => "<h3 class=\"widget-title\">",
                "after_title" => "</h3>",
            )
        );
    }

    add_action("widgets_init", "wp_base_theme_widgets_init");
endif;

// Ajout des ressources JS

if(!function_exists("wp_iracanyes_theme_enqueue_style")){
    function wp_iracanyes_theme_enqueue_scripts()
    {
        // Ajout du support JQuery
        // Fct pour ajouter les scripts pré-installé dans Wordpress
        wp_register_script("jquery");

    }

    add_action("wp_enqueue_scripts", "wp_iracanyes_theme_enqueue_scripts");
}