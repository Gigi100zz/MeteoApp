<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\OpenWeatherMapService;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(OpenWeatherMapService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function show(Request $request)
    {
        $city = $request->input('city', 'Roma'); // Default to Rome if no city is provided
        $weather = $this->weatherService->getCurrentWeather($city);

        if (!$weather) {
            return back()->with('error', 'Unable to fetch weather data for the specified city.');
    
        }
        return view('weather', [
            'weather' => $weather,
            'city' => $city,
        ]);
    }
}
