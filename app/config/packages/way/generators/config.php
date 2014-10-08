<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the generators are stored...
    |--------------------------------------------------------------------------
    |
    */
    'model_template_path' => 'app/generate/templates/model.txt',

    'scaffold_model_template_path' => 'app/generate/templates/scaffolding/model.txt',

    'controller_template_path' => 'app/generate/templates/controller.txt',

    'scaffold_controller_template_path' => 'app/generate/templates/scaffolding/controller.txt',

    'migration_template_path' => 'app/generate/templates/migration.txt',

    'seed_template_path' => 'app/generate/templates/seed.txt',

    'view_template_path' => 'app/generate/templates/view.txt',


    /*
    |--------------------------------------------------------------------------
    | Where the generated files will be saved...
    |--------------------------------------------------------------------------
    |
    */
    'model_target_path'   => app_path('models'),

    'controller_target_path'   => app_path('controllers'),

    'migration_target_path'   => app_path('database/migrations'),

    'seed_target_path'   => app_path('database/seeds'),

    'view_target_path'   => app_path('views')

];