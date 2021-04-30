<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
     */

    'mailgun'  => [
        'domain'   => env('MAILGUN_DOMAIN'),
        'secret'   => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses'      => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key'             => 'AIzaSyCAGinlpwBkM7THAoBn8slY2X7IoGceGC0',
        'auth_domain'         => 'crudapp-b1842.firebaseapp.com',
        'database_url'        => 'https://crudapp-b1842-default-rtdb.firebaseio.com/',
        'project_id'          => 'crudapp-b1842',
        'storage_bucket'      => 'crudapp-b1842.appspot.com',
        'messaging_sender_id' => '155553888613',
        'app_id'              => '1:155553888613:web:ddf5a40bae54d499f3898c',
        'measurement_id'      => 'G-47KGVTKS9T',
    ],

];
