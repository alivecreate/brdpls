<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Business;
use App\Models\BusinessGallery;
use Log;
use Auth;


class ImageUploadController extends Controller
{
   

public function imageUpload(Request $request)
{
// dd($request->all());
    // Validate the incoming request
    $request->validate([
        'image' => 'required|image|max:20480', // Max size 2MB
    ]);

    // Retrieve the image from the request
    $image = $request->file('image');


    try {
        $apiToken = env('CLOUDFLARE_API_TOKEN');
        $accountId = env('CLOUDFLARE_ACCOUNT_ID');

        $client = new Client();

        $response = $client->request('POST', "https://api.cloudflare.com/client/v4/accounts/{$accountId}/images/v1", [
            
        'headers' => [
                'Authorization' => "Bearer {$apiToken}",
            ],
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => fopen($image->getPathname(), 'r'),
                    'filename' => $image->getClientOriginalName(), // Explicitly set the filename
                ],
            ],
        ]);

        $body = $response->getBody();
        $result = json_decode($body);

        if ($result->success) {

$gallery = $result->result->id;

$business = Business::where(['id' =>$request->business_id, 'user_id'=> $request->user_id]);

            $business->update([
                'logo' => $result->result->id,
            ]);

            return response()->json([
                'success' => true,
                'image_id' => $result->result->id,
                'message' => 'Image uploaded successfully.',
            ]);
            


        } else {
            return response()->json([
                'success' => false,
                'message' => $result->errors[0]->message ?? 'Failed to upload image.',
            ], 500);
        }
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
        ], 500);
    }
}


public function imageUploads(Request $request)
{

    $image = $request->file('image');  

    $request->validate([
        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avi|max:2048', // Validate each image
 
    ]);

    $apiToken = env('CLOUDFLARE_API_TOKEN');
    $accountId = env('CLOUDFLARE_ACCOUNT_ID');
    $client = new Client();

    $uploadedImages = []; // Store uploaded image IDs
    $errors = []; // Store any errors


        try {
            $response = $client->request('POST', "https://api.cloudflare.com/client/v4/accounts/{$accountId}/images/v1", [
                'headers' => [
                    'Authorization' => "Bearer {$apiToken}",
                ],
                'multipart' => [
                    [
                        'name'     => 'file',
                        'contents' => fopen($image->getPathname(), 'r'),
                        'filename' => $image->getClientOriginalName(), // Explicitly set the filename
                    ],
                ],
            ]);

            $body = $response->getBody();
            $result = json_decode($body);

            if ($result->success) {
                $uploadedImages[] = $result->result->id;

                // Save the image ID to the business_gallery or update the business as needed

                // dd($request->business_id);
                $business = Business::find($request->business_id);


                $businessGallery = new BusinessGallery([
                    'user_id' => $request->user_id,
                    'image' => $result->result->id,
                    'type' => $request->type
                ]);
                $business->gallery()->save($businessGallery);

            } else {
                $errors[] = $result->errors[0]->message ?? 'Failed to upload image.';
            }

        } catch (\Exception $e) {
            $errors[] = $e->getMessage();
        }
    

    // If there were errors, return them with the response
    if (!empty($errors)) {
        return response()->json([
            'success' => false,
            'errors' => $errors,
        ], 500);
    }

    // Return success response with uploaded image IDs
    return response()->json([
        'success' => true,
        'image_ids' => $uploadedImages,
        'message' => 'Images uploaded successfully.',
    ]);
}


public function deleteBusinessLogo(Request $request)
{
    // dd($request->all());

    $business = Business::where('id', $request->business_id);
    
    // dd($business);

if ($business) {
    $business->update([
        'logo' => null
    ]);

    // dd('updated');
        deleteCloudImage($request->image_id);
        return response()->json(['success' => true, 'message' => 'Image Deleted.'], 200);
    } else {
        // Handle the case where the business was not found
        return response()->json(['success' => false, 'message' => 'Business not found.'], 404);
    }
}

public function deleteBusinessImage(Request $request)
{
    // dd($request->all());

    $business = BusinessGallery::where('image', $request->image_id)->first();
    // dd($business);

if ($business) {
    $business->delete();
    // dd('updated');
        deleteCloudImage($request->image_id);
        return response()->json(['success' => true, 'message' => 'Image Deleted.'], 200);
    } else {
        // Handle the case where the business was not found
        return response()->json(['success' => false, 'message' => 'Business not found.'], 404);
    }
}
}
