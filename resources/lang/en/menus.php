<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles'
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
                'view' => 'View User'
            ]
        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs'
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'General',
            'history' => 'History',
            'system' => 'System',

            //begin_Country_begin
            'countries' => 'Countries',
            //finish_Country_finish
            //begin_City_begin
            'cities' => 'Cities',
            //finish_City_finish
            //begin_Orphan_begin
            'orphans' => 'Orphans',
            //finish_Orphan_finish
            //begin_DonorType_begin
            'donor_types' => 'Donor Types',
            //finish_DonorType_finish
            //begin_Fundraising_begin
            'fundraisings' => 'Fundraising',
            //finish_Fundraising_finish
            //begin_Donor_begin
            'donors' => 'Donors'
            //finish_Donor_finish
            // **********Do_Not_Delete_me****************
        ],

        //start_Country_start
        'countries' => [
            'view' => 'View Country',
            'all' => 'All Countries',
            'create' => 'Create Country',
            'edit' => 'Edit Country',
            'management' => 'Country Management',
            'main' => 'Countries'
        ],
        //end_Country_end

        //start_City_start
        'cities' => [
            'view' => 'View City',
            'all' => 'All Cities',
            'create' => 'Create City',
            'edit' => 'Edit City',
            'management' => 'City Management',
            'main' => 'Cities'
        ],
        //end_City_end

        //start_Orphan_start
        'orphans' => [
            'view' => 'View Orphan',
            'all' => 'All Orphans',
            'create' => 'Create Orphan',
            'edit' => 'Edit Orphan',
            'management' => 'Orphan Management',
            'main' => 'Orphans'
        ],
        //end_Orphan_end

        //start_DonorType_start
        'donor_types' => [
            'view' => 'View DonorType',
            'all' => 'All Donor Types',
            'create' => 'Create DonorType',
            'edit' => 'Edit DonorType',
            'management' => 'DonorType Management',
            'main' => 'Donor Types'
        ],
        //end_DonorType_end

        //start_Fundraising_start
        'fundraisings' => [
            'view' => 'View Fundraising',
            'all' => 'All Fundraising',
            'create' => 'Create Fundraising',
            'edit' => 'Edit Fundraising',
            'management' => 'Fundraising Management',
            'main' => 'Fundraising'
        ],
        //end_Fundraising_end

        //start_Donor_start
        'donors' => [
            'view' => 'View Donor',
            'all' => 'All Donors',
            'create' => 'Create Donor',
            'edit' => 'Edit Donor',
            'management' => 'Donor Management',
            'main' => 'Donors'
        ]
        //end_Donor_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'language-picker' => [
        'language' => 'Language',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'zh' => 'Chinese Simplified',
            'zh-TW' => 'Chinese Traditional',
            'da' => 'Danish',
            'de' => 'German',
            'el' => 'Greek',
            'en' => 'English',
            'es' => 'Spanish',
            'fa' => 'Persian',
            'fr' => 'French',
            'he' => 'Hebrew',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'nl' => 'Dutch',
            'no' => 'Norwegian',
            'pt_BR' => 'Brazilian Portuguese',
            'ru' => 'Russian',
            'sv' => 'Swedish',
            'th' => 'Thai',
            'tr' => 'Turkish'
        ]
    ]
];
