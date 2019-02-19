<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PspRegisterCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $successStatus = 200;

    /**
     * all categories api
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCategories(Request $request)
    {
        $params = $request->all();
        $limit = $params['pageSize'] ?? 50;

        $categories = PspRegisterCategory::
        where('name',$params['search'])
            ->orWhere('name','like','%'.$params['search'].'%')
            ->limit($limit)->orderBy('name','ASC')->get();

//        .set('search', search.toString())
//    .set('pageNumber', pageNumber.toString())
//    .set('pageSize', pageSize.toString())

        return response()->json(['values' => $categories], $this->successStatus);
    }
}