<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PspRegisterCategory;

class CategoryController extends Controller
{
    public $successStatus = 200;

    /**
     * all categories api
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCategories()
    {
        $categories = PspRegisterCategory::all();

//        .set('search', search.toString())
//    .set('pageNumber', pageNumber.toString())
//    .set('pageSize', pageSize.toString())

        return response()->json(['values' => $categories], $this->successStatus);
    }
}