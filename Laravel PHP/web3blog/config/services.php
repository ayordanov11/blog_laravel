<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
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

    'linkedin' => [
    'client_id' => '78950ivhyokpda',
    'client_secret' => 'nVEi3P3CepIVF0RB',
    'redirect' => 'http://localhost:8000/callback/linkedin',
    ],

    'facebook' => [
        'client_id' => '220864308330675',
        'client_secret' => '3ee8e8ed1dab5c2b854e28e1a15aa56d',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

];
