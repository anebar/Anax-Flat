<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [
            "report" => [
                "text"  => t("Rapporter"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],
            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser"),
                "mark-if-parent" => true,
            ],
            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "test" => [
                "text"  => t("Test"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("En testsida")
            ],
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Visa vertikal grid"),
                "mark-if-parent" => true,
            ],
            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typografi"),
            ],
            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Tema"),
            ],
            "theme-selector" => [
                "text"  => t("Theme selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("theme-selector"),
            ],
        ],
    ],

    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [
            "report" => [
                "text"  => t("Rapporter"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],
            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser"),
                "mark-if-parent" => true,
            ],
            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "test" => [
                "text"  => t("Test"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("En testsida")
            ],
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Visa vertikal grid"),
                "mark-if-parent" => true,
            ],
            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typografi"),
            ],
            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Tema"),
            ],
            "theme-selector" => [
                "text"  => t("Theme selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("theme-selector"),
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
