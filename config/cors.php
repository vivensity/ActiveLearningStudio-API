<?php
$allowed_cors = explode(",", env('APP_ALLOWED_URL'));

$input = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST']) : "";
$domain_arr = array_filter($allowed_cors, function ($item) use ($input) {
    if (stripos($item, $input) !== false) {
        return true;
    }
    return false;
});
$domain = isset($domain_arr[0])? $domain_arr[0] : null;
return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [$domain[0], "http://localhost:3000"],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
