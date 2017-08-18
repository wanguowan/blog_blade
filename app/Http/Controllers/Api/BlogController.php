<?php
/**
 * Created by PhpStorm.
 * User: wan
 * Date: 8/7/17
 * Time: 4:40 PM
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Models\DB\Blogs;
use Illuminate\Support\Facades\Response;

class BlogController extends Controller
{
    public function getBlogWithID( $nID )
    {
        $arrBlog = Blogs::find( $nID )->toArray();

        return Response::json( $arrBlog );
    }
}