<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '164863802228431',        
        'client_secret' => '287161fca0c22a360cde099b55c3ce1b', 
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],
    'google' => [
        'client_id' => '429581181229-bik312tt8ntf3oom44nrc5i6ooq1d8v0.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' =>  'Z6m1An9oEvivcBFFmvCPygzS', // Your GitHub Client Secret
        'redirect' =>  'http://localhost:8000/callback/google',
    ],

];
