<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function yelp(Request $request)
    {

        $options = array(
            // 'accessToken' => 'YOUR ACCESS TOKEN', // Required, unless apiKey is provided
            'apiHost' => 'api.yelp.com', // Optional, default 'api.yelp.com',
            'apiKey' => env('YAK'), // Required, unless accessToken is provided
        );

        $client = \Stevenmaguire\Yelp\ClientFactory::makeWith(
            $options,
            \Stevenmaguire\Yelp\Version::THREE
        );        
        // Provide the access token to the yelp-php client
        // $client = new \Stevenmaguire\Yelp\v3\Client(array(
        //     'apiKey' => env('YAK'),
        //     'apiHost' => 'api.yelp.com' // Optional, default 'api.yelp.com'
        // ));        
        $parameters = [
        'term' => 'food',
        'location' => 'St. Louis, Missouri',
        // 'location' => $request->get('location'),
        'radius' => 100,
        'limit' => 10,
    ];
    $results = $client->getBusinessesSearchResults($parameters);
    dump($results);
    return view('component.results', compact('results'));
    }
}

