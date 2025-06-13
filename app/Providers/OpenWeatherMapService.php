<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;

class OpenWeatherMapService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('openweathermap.api_key');
        $this->baseUrl = config('openweathermap.base_url');
    }
    public function getCurrentWeather($city, $units = 'metric', $lang = 'it')
    {
        $response = Http::get($this->baseUrl . '/weather', [
            'q' => $city,
            'appid' => $this->apiKey,
            'units' => $units,
            'lang' =>  $lang,
        ]);
        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
