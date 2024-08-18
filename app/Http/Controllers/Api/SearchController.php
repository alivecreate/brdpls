<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\City;

class SearchController extends Controller
{
    public function searchCategory(Request $request)
    {
        $query = $request->input('query');

        // Perform the search (example: search in users and groups)
        $categories = Category::where('name', 'LIKE', "%$query%")
                      ->select('id', 'name', 'image', 'icon') // Assuming profile_image is the image field
                      ->where(['status' => 'active'])
                      ->get();
        // $groups = Group::where('name', 'LIKE', "%$query%")
        //                ->select('id', 'name', 'group_image as img', 'type') // Assuming group_image is the image field
        //                ->get();

//  $cities = City::where('name', 'LIKE', "%$query%")
//                        ->select('id', 'name')
//                        ->get();

        // Combine results
        // $results = $users->merge($cities);

        // Combine results
        // $results = $users->merge($groups);

        return response()->json(['results' => $categories]);
    }
}
