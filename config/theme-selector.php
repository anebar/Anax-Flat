<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                //"css/modules.min.css"
                "css/base.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Open+Sans",
                "https://fonts.googleapis.com/css?family=Lato"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
            ]
        ],
/*
        "separator01" => "------------------------------------------------",

        "vgrid"      => [
            "title"      => "Vertikal grid",
            "class"      => "",
            "stylesheets" => [
                "css/layout.min.css"
            ]
        ],
*/
        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "typography",
            "stylesheets" => [
                "css/typography.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Cabin+Sketch|Calligraffitti|Lato|Playball|Prosto+One"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => [
                "css/fun.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Cabin+Sketch|Calligraffitti|Lato|Playball|Prosto+One"
            ]
        ],
    ]
];
