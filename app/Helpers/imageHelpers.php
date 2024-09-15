<?php

use Illuminate\Support\Facades\File;    
use Intervention\Image\ImageManager;
use GuzzleHttp\Client;




function deleteImages($image){
    if(isset($image)){
        if(File::exists(public_path('web').'/media/lg/'.$image)){
            unlink(public_path('web').'/media/lg/'.$image);
          }
          if(File::exists(public_path('web').'/media/md/'.$image)){
            unlink(public_path('web').'/media/md/'.$image);
        }
        if(File::exists(public_path('web').'/media/sm/'.$image)){
            unlink(public_path('web').'/media/sm/'.$image);
        }
        if(File::exists(public_path('web').'/media/xs/'.$image)){
            unlink(public_path('web').'/media/xs/'.$image);
        }
        if(File::exists(public_path('web').'/media/icon/'.$image)){
            unlink(public_path('web').'/media/icon/'.$image);
        }
    }
}

function uploadImageTemp($request, $fileName = 'image', $prefix = null){
    // dd($request->file('image'));
    
    $manager = new ImageManager(
        new Intervention\Image\Drivers\Gd\Driver()
    );
    
    if (request()->hasFile($fileName)) {
    // open an image file
    $image = @$manager->read($request->file($fileName));
    $image_name = $prefix.time().'_'.rand(111,999).'.webp';
    
    // Icons Convversion

    $iconPath = public_path('web/media/icon');
    $iconImage = @$manager->read($request->file($fileName));
    $iconImage->scaleDown(width: 200);
    $iconImage->save($iconPath.'/'.$image_name);

    // xs Convversion

    $xsPath = public_path('web/media/xs');
    $xsImage = @$manager->read($request->file($fileName));
    $xsImage->scaleDown(width: 500);
    $xsImage->save($xsPath.'/'.$image_name);

    // sm Convversion

    $smPath = public_path('web/media/sm');
    $smImage = @$manager->read($request->file($fileName));
    $smImage->scaleDown(width: 1000);
    $smImage->save($smPath.'/'.$image_name);

    // md Convversion

    $mdPath = public_path('web/media/md');
    $mdImage = @$manager->read($request->file($fileName));
    $mdImage->scaleDown(width: 1500);
    $mdImage->save($mdPath.'/'.$image_name);

    // lg Convversion

    $lgPath = public_path('web/media/lg');
    $lgImage = @$manager->read($request->file($fileName));
    $lgImage->scaleDown(width: 3000);
    $lgImage->save($lgPath.'/'.$image_name);
    
    return $image_name;
    }
    else{
        return null;
    }
}


function uploadImageThumb($request, $fileName = 'image', $prefix = null){
    // dd($request->file('image'));

    $manager = new ImageManager(
        new Intervention\Image\Drivers\Gd\Driver()
    );
    
    
    if (request()->hasFile($fileName)) {
    // open an image file
    $image = @$manager->read($request->file($fileName));
    $image_name = $prefix.time().'_'.rand(111,999).'.webp';
    
    // Icons Convversion

    $iconPath = public_path('web/media/icon');
    $iconImage = @$manager->read($request->file($fileName));
    $iconImage->scaleDown(width: 200);
    $iconImage->save($iconPath.'/'.$image_name);

    

    // xs Convversion

    $xsPath = public_path('web/media/xs');
    $xsImage = @$manager->read($request->file($fileName));
    $xsImage->scaleDown(width: 500);
    $xsImage->save($xsPath.'/'.$image_name);

    // sm Convversion

    $smPath = public_path('web/media/sm');
    $smImage = @$manager->read($request->file($fileName));
    $smImage->scaleDown(width: 1000);
    $smImage->save($smPath.'/'.$image_name);

    // md Convversion

    $mdPath = public_path('web/media/md');
    $mdImage = @$manager->read($request->file($fileName));
    $mdImage->scaleDown(width: 1500);
    $mdImage->save($mdPath.'/'.$image_name);

    // lg Convversion

    $lgPath = public_path('web/media/lg');
    $lgImage = @$manager->read($request->file($fileName));
    $lgImage->scaleDown(width: 3000);
    $lgImage->save($lgPath.'/'.$image_name);
    
    return $image_name;
    }
    else{
        return null;
    }

}



function uploadImagesThumb($request, $fileName = null, $prefix = null){
    
    


    $manager = new ImageManager(
        new Intervention\Image\Drivers\Gd\Driver()
    );
    
    
    if ($request !== null) {
        // open an image file
    $image = @$manager->read($request);
    $image_name = $prefix.time().'_'.rand(111,999).'.webp';
    
    // Icons Convversion

    $iconPath = public_path('web/media/icon');
    $iconImage = @$manager->read($request);
    $iconImage->scaleDown(width: 200);
    $iconImage->save($iconPath.'/'.$image_name);

    

    // xs Convversion

    $xsPath = public_path('web/media/xs');
    $xsImage = @$manager->read($request);
    $xsImage->scaleDown(width: 500);
    $xsImage->save($xsPath.'/'.$image_name);

    // sm Convversion

    $smPath = public_path('web/media/sm');
    $smImage = @$manager->read($request);
    $smImage->scaleDown(width: 1000);
    $smImage->save($smPath.'/'.$image_name);

    // md Convversion

    $mdPath = public_path('web/media/md');
    $mdImage = @$manager->read($request);
    $mdImage->scaleDown(width: 1500);
    $mdImage->save($mdPath.'/'.$image_name);

    // lg Convversion

    $lgPath = public_path('web/media/lg');
    $lgImage = @$manager->read($request);
    $lgImage->scaleDown(width: 3000);
    $lgImage->save($lgPath.'/'.$image_name);
    
    return $image_name;
    }
    else{
        return null;
    }

}






function deleteCloudImage($imageId = null){
          
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




function uploadCloudImage($image){
      
    try {
        // $apiToken = env('CLOUDFLARE_API_TOKEN');
        // $accountId = env('CLOUDFLARE_ACCOUNT_ID');
        // dd($image); 

        $apiToken = 'AXzA-Tlk5jwxt7bc-_u4jR9yWyAHnFk8L8VQK750';
        $accountId = 'd3c72ca07db24a2fe735ae6ff0383b19';


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
            return $result->result->id;
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
            return 'false';
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


function uploadCloudFlairImage($image){
      
    try {
        
        $apiToken = env('CLOUDFLARE_API_TOKEN');
        $accountId = env('CLOUDFLARE_ACCOUNT_ID');
        
        // dd($accountId, $apiToken);


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
            return $result->result->id;
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

function deleteCloudflareImage($imageId)
{
    
    $apiToken = env('CLOUDFLARE_API_TOKEN');
    $accountId = env('CLOUDFLARE_ACCOUNT_ID');

    $url = "https://api.cloudflare.com/client/v4/accounts/{$accountId}/images/v1/$imageId";
    
    $headers = [
        
        'Authorization' => "Bearer {$apiToken}",
        'Content-Type: application/json',
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($result);
}





