<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update'
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
        'none' => 'None'
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total'
                ]
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total'
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History'
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone'
                        ]
                    ]
                ],

                'view' => 'View User'
            ]
        ],

        //start_Country_start
        'countries' => [
            'management' => 'Countries Management',
            'create' => 'Create Country',
            'view' => 'View Country',
            'edit' => 'Edit Country',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'code' => "Code",
                'sort' => 'Sort',
                'total' => 'Countries total|Countries total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Country_end

        //start_City_start
        'cities' => [
            'management' => 'Cities Management',
            'create' => 'Create City',
            'view' => 'View City',
            'edit' => 'Edit City',

            'table' => [
                'id' => "Id",
                'country_id' => "Country",
                'name' => "Name",
                'sort' => 'Sort',
                'total' => 'Cities total|Cities total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_City_end

        //start_Orphan_start
        'orphans' => [
            'management' => 'Orphans Management',
            'create' => 'Create Orphan',
            'view' => 'View Orphan',
            'edit' => 'Edit Orphan',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'f_name' => "Father Name",
                'm_name' => "Mother Name",
                'description' => "Description",
                'sort' => 'Sort',
                'total' => 'Orphans total|Orphans total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Orphan_end

        //start_DonorType_start
        'donor_types' => [
            'management' => 'Donor Types Management',
            'create' => 'Create DonorType',
            'view' => 'View DonorType',
            'edit' => 'Edit DonorType',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'details' => "Details",
                'sort' => 'Sort',
                'total' => 'Donor Types total|Donor Types total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_DonorType_end

        //start_Fundraising_start
        'fundraisings' => [
            'management' => 'Fundraising Management',
            'create' => 'Create Fundraising',
            'view' => 'View Fundraising',
            'edit' => 'Edit Fundraising',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'founded_at' => "Date",
                'description' => "Description",
                'sort' => 'Sort',
                'total' => 'Fundraising total|Fundraising total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ]
        //end_Fundraising_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me'
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information'
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link'
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password'
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information'
            ]
        ]
    ]
];
