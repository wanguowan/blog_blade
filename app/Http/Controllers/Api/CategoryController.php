<?php
/**
 * Created by PhpStorm.
 * User: wan
 * Date: 8/6/17
 * Time: 4:52 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Models\DB\Categorys;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function index()
    {
        //  获得标签列表及blog数量
        $arrCategory = Categorys::withCount( 'blogs' )->get()->toArray();

        return Response::json( $arrCategory );
    }

    public function listBlogs( $nCatId )
    {
        $arrBlogs = Categorys::find( $nCatId )->blogs()->get()->toArray();

        return Response::json( $arrBlogs );
    }

}