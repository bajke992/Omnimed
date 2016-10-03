<?php

return [

    /*
     * Omnimed API client_id
     */
    'client_id' => env('OMNIMED_CLIENT_ID'),

    /*
     * Omnimed API client_secret
     */
    'client_secret' => env('OMNIMED_CLIENT_SECRET'),

    /*
     * Omnimed API temporary access token
     */
    'tmp_token' => env('OMNIMED_TMP_TOKEN'),

    /*
     * Omnimed API grant_type
     */
    'grant_type' => env('OMNIMED_GRANT_TYPE', 'client_credentials'),

    /*
     * Omnimed API username for grant_type : password
     */
    'username' => env('OMNIMED_USERNAME', NULL),

    /*
     * Omnimed API password for grant_type : password
     */
    'password' => env('OMNIMED_PASSWORD', NULL)
    
];