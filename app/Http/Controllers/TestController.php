<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function rssFeed(){

  // Fetch the RSS feed
  $response = Http::get('https://gujarati.gnsnews.co.in/feed/');
  $xml = simplexml_load_string($response->body());

  // Convert XML to JSON and then to an array
  $json = json_encode($xml);
  $feedArray = json_decode($json, true);

  // Extract items
  $items = $feedArray['channel']['item'];

  // Pass the items to the view
  return view('test.rss', compact('items'));

return view('test.rss');


        return 'test';
    }
}
