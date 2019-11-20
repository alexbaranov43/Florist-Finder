<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // private $yelpKey = env('YAK');

    public function index()
    {
        // Get access token via oauth2-yelp library
       return view('component.index');
    }

    public function yelp()
    {

        // Get the location from the Blade
        $latitude = Request::input('latitude');
        $longitude = Request::input('longitude');
        $location = Request::input('location');
        $options = array(
            // 'accessToken' => 'YOUR ACCESS TOKEN', // Required, unless apiKey is provided
            'apiHost' => 'api.yelp.com', // Optional, default 'api.yelp.com',
            'apiKey' => env('YAK'), // Required, unless accessToken is provided
        );

        $client = \Stevenmaguire\Yelp\ClientFactory::makeWith(
            $options,
            \Stevenmaguire\Yelp\Version::THREE
        );   

        $parameters = [
        'term' => 'florist',
        'location' => $location,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'radius' => 5000,
        'limit' => 20,
    ];
    $results = $client->getBusinessesSearchResults($parameters);
    return view('component.results', compact('results'));
    }
}

