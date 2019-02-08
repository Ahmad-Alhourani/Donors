<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.'
        ],

        'users' => [
            'cant_resend_confirmation' =>
                'The application is currently set to manually approve users.',
            'confirmation_email' =>
                'A new confirmation e-mail has been sent to the address on file.',
            'confirmed' => 'The user was successfully confirmed.',
            'created' => 'The user was successfully created.',
            'deleted' => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored' => 'The user was successfully restored.',
            'session_cleared' => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated' => 'The user was successfully updated.',
            'updated_password' =>
                "The user's password was successfully updated."
        ]
    ],

    'frontend' => [
        'contact' => [
            'sent' =>
                'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.'
        ],

        //start_Country_start
        'country' => [
            'saved' => 'Country saved successfully.',
            'updated' => 'Country updated successfully.',
            'deleted' => 'Country deleted successfully.'
        ],
        //end_Country_end

        //start_City_start
        'city' => [
            'saved' => 'City saved successfully.',
            'updated' => 'City updated successfully.',
            'deleted' => 'City deleted successfully.'
        ],
        //end_City_end

        //start_Orphan_start
        'orphan' => [
            'saved' => 'Orphan saved successfully.',
            'updated' => 'Orphan updated successfully.',
            'deleted' => 'Orphan deleted successfully.'
        ],
        //end_Orphan_end

        //start_DonorType_start
        'donor_type' => [
            'saved' => 'DonorType saved successfully.',
            'updated' => 'DonorType updated successfully.',
            'deleted' => 'DonorType deleted successfully.'
        ],
        //end_DonorType_end

        //start_Fundraising_start
        'fundraising' => [
            'saved' => 'Fundraising saved successfully.',
            'updated' => 'Fundraising updated successfully.',
            'deleted' => 'Fundraising deleted successfully.'
        ],
        //end_Fundraising_end

        //start_Donor_start
        'donor' => [
            'saved' => 'Donor saved successfully.',
            'updated' => 'Donor updated successfully.',
            'deleted' => 'Donor deleted successfully.'
        ],
        //end_Donor_end

        //start_Donation_start
        'donation' => [
            'saved' => 'Donation saved successfully.',
            'updated' => 'Donation updated successfully.',
            'deleted' => 'Donation deleted successfully.'
        ]
        //end_Donation_end

        // Do not delete me :) I'm used for auto-generation
    ]
];
