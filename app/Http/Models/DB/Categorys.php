<?php
/**
 * Created by PhpStorm.
 * User: wan
 * Date: 7/27/17
 * Time: 5:08 PM
 */
namespace App\Http\Models\DB;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    public function blogs()
    {
        return $this->hasMany( 'App\Http\Models\DB\Blogs', 'b_cat_id' )
            ->select( 'id', 'b_flag', 'b_title', 'b_views' );
    }
}