<?php

return [
    /*
    |--------------------------------------------------------------------------
    | OpenWeatherMap API Key
    |--------------------------------------------------------------------------
    |
    | This value is the API key for accessing the OpenWeatherMap service.
    | You can obtain an API key by signing up at https://openweathermap.org/api.
    |
    */

    'api_key' => env('OPENWEATHERMAP_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | OpenWeatherMap Base URL
    |--------------------------------------------------------------------------
    |
    | This value is the base URL for the OpenWeatherMap API.
    |
    */

    'base_url' => env('OPENWEATHERMAP_BASE_URL','https://api.openweathermap.org/data/2.5'),
];