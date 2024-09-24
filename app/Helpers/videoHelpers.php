<?php

use Illuminate\Support\Facades\File;    
use GuzzleHttp\Client;






function deleteCloudVideo($imageId = null){
          
    $apiToken = env('CLOUDFLARE_ACCOUNT_ID');
    $accountId = env('CLOUDFLARE_API_TOKEN');


        $client = new Client();
        $url = 'https://api.cloudflare.com/client/v4/accounts/'.$apiToken.'/images/v1/' . $imageId;

        try {
            $response = $client->delete($url, [
                'headers' => [
                    'Authorization' => 'Bearer '.$accountId,
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $body = json_decode($response->getBody(), true);

            if ($statusCode == 200 && $body['success']) {
                return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to delete the image.', 'error' => $body]);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete the image.', 'error' => $e->getMessage()]);
        }

}




function uploadCloudFlairVideo($video){
      
        // dd($video);

    try {
        $apiToken = env('CLOUDFLARE_API_TOKEN');
        $accountId = env('CLOUDFLARE_ACCOUNT_ID');
        
        // dd($accountId, $apiToken);

        $client = new Client();

        $response = $client->request('POST', "https://api.cloudflare.com/client/v4/accounts/{$accountId}/stream", [
     
        'headers' => [
                'Authorization' => "Bearer {$apiToken}",
            ],
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => fopen($video->getPathname(), 'r'),
                    'filename' => $video->getClientOriginalName(), // Explicitly set the filename
                ],
            ],
        ]);

        $body = $response->getBody();
        $result = json_decode($body);

        if ($result->success) {
            return $result->result->uid;
        } else {
            // return 'false';
            return response()->json([
                'success' => false,
                'message' => $result->errors[0]->message ?? 'Failed to upload image.',
            ], 500);
        }
    } catch (\Exception $e) {
        dd($e);
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
        ], 500);

    }
}


if (!function_exists('getPostImages')) {
    function getPostImages($images) {

        $images = explode(',', $images);

        return $images;

        // dd($images);

        }   
}


 function getVideoStatus($videoId)
    {
        $accountId = env('CLOUDFLARE_ACCOUNT_ID');
        $apiToken = env('CLOUDFLARE_API_TOKEN');

        // API endpoint for checking video status
        $statusUrl = "https://api.cloudflare.com/client/v4/accounts/$accountId/stream/$videoId";

        try {
            // Send a GET request to the Cloudflare API
            $response = Http::withToken($apiToken)
                ->get($statusUrl);

            // Check if the request was successful
            if ($response->successful()) {
                $data = $response->json();

                // Check if the video is ready for playback
                if (isset($data['result']['readyToStream']) && $data['result']['readyToStream']) {
                    return [
                        'status' => 'ready',
                        'message' => 'Video is available for playback',
                        'thumbnail' => $data['result']['thumbnail'],
                    ];
                } else {
                    // Return thumbnail if video is still processing
                    return [
                        'status' => 'processing',
                        'message' => 'Video is still processing, showing thumbnail',
                        'thumbnail' => $data['result']['thumbnail'], // Thumbnail URL during processing
                    ];
                }
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Failed to check video status',
                    'details' => $response->body()
                ];
            }
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Exception occurred during the status check',
                'details' => $e->getMessage()
            ];
        }
}

function deleteVideo($videoId)
    {
        $accountId = env('CLOUDFLARE_ACCOUNT_ID');
        $apiToken = env('CLOUDFLARE_API_TOKEN');

        // API endpoint for deleting a video
        $deleteUrl = "https://api.cloudflare.com/client/v4/accounts/$accountId/stream/$videoId";

        try {
            // Send a DELETE request to the Cloudflare API
            $response = Http::withToken($apiToken)
                ->delete($deleteUrl);

            // Check if the request was successful
            if ($response->successful()) {
                return [
                    'status' => 'success',
                    'message' => 'Video successfully deleted from Cloudflare Stream.',
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Failed to delete video from Cloudflare Stream.',
                    'details' => $response->body()
                ];
            }
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Exception occurred during video deletion',
                'details' => $e->getMessage()
            ];
        }
    }
