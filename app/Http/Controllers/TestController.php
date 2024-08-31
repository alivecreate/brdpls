<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


use Intervention\Image\ImageManager;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Drivers\Gd\Driver;


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

    public function createCollage()
    {

      $manager = new ImageManager(new Driver());

  // Open image from the file system
  $image = $manager->read('front/images/web/ganesh-competition.png');

    // Define the size of the collage
    $collageWidth = 600;
    $collageHeight = 600;

    // Create a blank canvas
    $collage = $manager->create($collageWidth, $collageHeight, '#ffffff');

    // Load the images
    $image1 = $manager->read('front/images/web/barodaplus-logo.png')->resize(300, 300);
    $image2 = $manager->read('front/images/web/barodaplus-logo.png')->resize(300, 300);
    $image3 = $manager->read('front/images/web/barodaplus-logo.png')->resize(300, 300);
    $image4 = $manager->read('front/images/web/group-registration.png')->resize(300, 300);

    // Insert images into the canvas
    $collage->place($image1, 'top-left', 0, 0);  // Position (0, 0)
    $collage->place($image2, 'top-right', 0, 0); // Position (300, 0)
    $collage->place($image3, 'bottom-left', 0, 0); // Position (0, 300)
    $collage->place($image4, 'bottom-right', 0, 0); // Position (300, 300)

    // Save the collage
    $random = rand(100000, 999999).'jpg';
    $collage->save('test/img/collage.jpg');

return  $random;
    // Return the collage as a response
    // public Image::encode(EncoderInterface $encoder = new AutoEncoder()): EncodedImage


    $imageData = $collage::encode('jpeg');
    return response($imageData, 200)
            ->header('Content-Type', 'image/jpeg')
            ->header('Content-Disposition', 'inline; filename="collage.jpg"');

      

//       $manager = new ImageManager(new Driver());


// try{
//   // Open image from the file system
//   $image = $manager->read('front/images/web/group-registration.png');
  
//   // resize image proportionally to 300px width
// $image->scale(width: 300);

// // place watermark
// $image->place('front/images/web/barodaplus-logo.png');

// // save modified image in new format 
// $image->toPng()->save('test/img/foo.png');



// return 'test';


    
    }
}