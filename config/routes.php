<?php

$router -> addRoutes(
    [
        [ 
            'route' => '/', 
            'dir_path' => 'src/View/home/'
        ],

        [ 
            'route' => 'contact', 
            'dir_path' => 'src/View/contact/'
        ],

        [ 
            'route' => 'job', 
            'dir_path' => 'src/View/job/', 
            'rendering_html' => false
        ],

        [ 
            'route' => 'projets', 
            'dir_path' => 'src/View/projects/hub/'
        ],

        // ################################################################################################################
        
        [ 
            'route' => 'github', 
            'dir_path' => 'src/View/social/github/', 
            'rendering_html' => false
        ],
        
        [ 
            'route' => 'twitter', 
            'dir_path' => 'src/View/social/twitter/', 
            'rendering_html' => false
        ],
        
        [ 
            'route' => 'linkedin', 
            'dir_path' => 'src/View/social/linkedin/', 
            'rendering_html' => false
        ],
    ]
);
