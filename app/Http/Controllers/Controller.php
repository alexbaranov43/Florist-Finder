<?php

namespace App\Http\Controllers;

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
    $provider = new \Stevenmaguire\OAuth2\Client\Provider\Yelp([
        'clientId'          => '{yelp-client-id}',
        'clientSecret'      => '{yelp-client-secret}'
    ]);
    $accessToken = (string) $provider->getAccessToken('client_credentials');

    // Provide the access token to the yelp-php client
    $client = new \Stevenmaguire\Yelp\v3\Client(array(
        'accessToken' => $accessToken,
        'apiHost' => 'api.yelp.com' // Optional, default 'api.yelp.com'
    ));
       return view('component.index');
    }

    public function yelp()
    {
        $response = $request('GET', '');
    }
}

